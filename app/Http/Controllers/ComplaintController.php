<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintStatusLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ComplaintSubmitted;
use App\Mail\ComplaintStatusUpdated;

class ComplaintController extends Controller
{
    // 📝 Store a new complaint
    public function store(Request $request)
    {
        $request->validate([
            'issueType' => 'required',
            'address' => 'required',
            'details' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $prefixes = [
            'road' => 'RMI',
            'lighting' => 'SLI',
            'water' => 'WTR',
            'garbage' => 'GRB',
        ];

        $prefix = $prefixes[$request->issueType] ?? 'GEN';
        $issueId = $prefix . '-' . strtoupper(Str::random(4)) . '-' . now()->format('His');

        $imagePath = $request->hasFile('image')
            ?$request->file('image')->store('complaints', 'public')
            : null;

        $complaint = Complaint::create([
            'issue_id' => $issueId,
            'user_id' => Auth::id(),
            'category' => $request->issueType,
            'address' => $request->address,
            'details' => $request->details,
            'image' => $imagePath,
            'status' => 'Received',
        ]);

        ComplaintStatusLog::create([
            'complaint_id' => $complaint->id,
            'status' => 'Received',
            'changed_at' => now(),
            'changed_by' => Auth::id(),
        ]);

        Mail::to(Auth::user()->email)->send(new ComplaintSubmitted($complaint));

        return redirect()->back()->with('success', 'Complaint submitted successfully. Your Issue ID: ' . $issueId);
    }

    // ✅ Admin updates complaint status
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Received,Assigned,Work Started,In Progress,Completed,Closed'
        ]);

        $complaint = Complaint::with('user')->findOrFail($id);
        $complaint->status = $request->status;
        $complaint->save();

        ComplaintStatusLog::create([
            'complaint_id' => $complaint->id,
            'status' => $request->status,
            'changed_at' => now(),
            'changed_by' => auth()->id(),
        ]);

        Mail::to($complaint->user->email)->send(new ComplaintStatusUpdated($complaint, $request->status));

        return back()->with('success', 'Complaint status updated and user notified.');
    }

    // 👤 User complaint history
    public function history()
    {
        $userId = auth()->id();
        $complaints = Complaint::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        return view('complaint-history', compact('complaints'));
    }

    // 🕵️ Admin views complaint detail
    public function show($id)
    {
        $complaint = Complaint::with('user', 'statusLogs')->findOrFail($id);
        return view('admin.complaint-details', compact('complaint'));
    }

    // 👀 Track Complaint Form
    public function trackForm()
    {
        return view('complaints.track-form');
    }

    // 🔍 Track Complaint Search
    public function track(Request $request)
    {
        $request->validate([
            'issue_id' => 'required'
        ]);

        $complaint = Complaint::with('statusLogs')->where('issue_id', $request->issue_id)->first();

        if (!$complaint) {
            return redirect()->back()->with('error', 'Complaint not found.');
        }

        return view('complaints.track-result', compact('complaint'));
    }

    // 🧑‍💼 Environmental Police Dashboard with Filters
    public function envPoliceDashboard(Request $request)
    {
        $query = Complaint::query()->where('category', 'garbage');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $complaints = $query->latest()->get();
        return view('admin.env', compact('complaints'));
    }

    // 🏢 Municipal Council Dashboard with Filters
    public function municipalDashboard(Request $request)
    {
        $query = Complaint::query()->whereIn('category', ['road', 'lighting']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $complaints = $query->latest()->get();
        return view('admin.municipal', compact('complaints'));
    }

    // 🏢 Division Office Dashboard with Filters
    public function divisionOfficeDashboard(Request $request)
    {
        $query = Complaint::query()->whereIn('category', ['water', 'garbage']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $complaints = $query->latest()->get();
        return view('admin.division', compact('complaints'));
    }
}

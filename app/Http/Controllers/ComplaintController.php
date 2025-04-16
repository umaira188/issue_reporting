<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintStatusLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComplaintSubmitted;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
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
            ? $request->file('image')->store('complaints', 'public')
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

        Mail::to(Auth::user()->email)->queue(new ComplaintSubmitted($complaint));

        return redirect()->back()->with('success', 'Complaint submitted successfully. Your Issue ID: ' . $issueId);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Received,Assigned,Work Started,In Progress,Completed,Closed'
        ]);

        $complaint = Complaint::findOrFail($id);
        $complaint->status = $request->status;
        $complaint->save();

        ComplaintStatusLog::create([
            'complaint_id' => $complaint->id,
            'status' => $request->status,
            'changed_at' => now(),
            'changed_by' => auth()->id(),
        ]);

        return back()->with('success', 'Complaint status updated successfully.');
    }

    public function municipalDashboard()
    {
        $complaints = Complaint::whereIn('category', ['road', 'lighting'])->get();
        return view('admin.municipal', compact('complaints'));
    }

    public function envPoliceDashboard()
    {
        $complaints = Complaint::where('category', 'garbage')->get();
        return view('admin.env', compact('complaints'));
    }

    public function divisionOfficeDashboard()
    {
        $complaints = Complaint::whereIn('category', ['water', 'garbage'])->get();
        return view('admin.division', compact('complaints'));
    }

    public function history()
    {
        $userId = auth()->id();
        $complaints = Complaint::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        return view('complaint-history', compact('complaints'));
    }
    public function show($id)
{
    $complaint = Complaint::with('user')->findOrFail($id);
    return view('admin.complaint-details', compact('complaint'));
}
}

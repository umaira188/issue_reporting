<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
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

        // Generate issue ID
        $prefixes = [
            'road' => 'RMI',
            'lighting' => 'SLI',
            'water' => 'WTR',
            'garbage' => 'GRB',
        ];
        $prefix = $prefixes[$request->issueType] ?? 'GEN';
        $issueId = $prefix . '-' . rand(100, 999) . strtoupper(Str::random(2));

        // Upload image
        $imagePath = $request->hasFile('image') ?
            $request->file('image')->store('complaints', 'public') : null;

        // Save complaint
        $complaint = Complaint::create([
            'issue_id' => $issueId,
            'user_id' => Auth::id(),
            'category' => $request->issueType,
            'address' => $request->address,
            'details' => $request->details,
            'image' => $imagePath,
            'status' => 'pending',
        ]);

        // Send email
        Mail::to(Auth::user()->email)->queue(new ComplaintSubmitted($complaint));

        return redirect()->back()->with('success', 'Complaint submitted successfully. Your Issue ID: ' . $issueId);
    }
    public function municipalDashboard() {
        $complaints = Complaint::whereIn('category', ['road', 'lighting'])->get();
        return view('admin.municipal', compact('complaints'));
    }
    
    public function envPoliceDashboard() {
        $complaints = Complaint::where('category', 'garbage')->get();
        return view('admin.env', compact('complaints'));
    }
    
    public function divisionOfficeDashboard() {
        $complaints = Complaint::whereIn('category', ['water', 'garbage'])->get();
        return view('admin.division', compact('complaints'));
    }
    public function history()
    {
        $userId = auth()->id();
        $complaints = Complaint::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        return view('complaint-history', compact('complaints'));
    }

    
}

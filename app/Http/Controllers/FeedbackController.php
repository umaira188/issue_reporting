<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'messages.feedback_success');

    }
    
}

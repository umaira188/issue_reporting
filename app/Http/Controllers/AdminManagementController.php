<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminManagementController extends Controller
{
    public function index()
    {
        // Allow only super admin
        if (Auth::user()->role !== 'super_admin') {
            abort(403);
        }

        $admins = User::where('role', '!=', 'user')->get();
        return view('admin.manage', compact('admins'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role !== 'super_admin') {
            abort(403);
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.manage')->with('success', 'Admin created successfully!');
    }
}


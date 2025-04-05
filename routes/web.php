<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminManagementController;

// ---------------------------
// Guest routes (Login, Register)
// ---------------------------
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

// ---------------------------
// Welcome page
// ---------------------------
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ---------------------------
// Authenticated user routes
// ---------------------------
Route::middleware(['auth'])->group(function () {

    // Complaint submission
    Route::get('/lodge-complaint', function () {
        return view('lodge-complaint');
    })->name('lodge-complaint');

    Route::post('/submit-complaint', [ComplaintController::class, 'store'])->name('submit-complaint');

    // Complaint history
    Route::get('/complaint-history', [ComplaintController::class, 'history'])->name('complaint.history');

    // Feedback routes ✅
    Route::get('/feedback', function () {
        return view('feedback');
    })->name('feedback');

    Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.submit');

    // Admin dashboards by role
    Route::get('/admin/env-police', [ComplaintController::class, 'envPoliceDashboard'])->name('admin.env');
    Route::get('/admin/municipal', [ComplaintController::class, 'municipalDashboard'])->name('admin.municipal');
    Route::get('/admin/division-office', [ComplaintController::class, 'divisionOfficeDashboard'])->name('admin.division');

    // Super admin management
    Route::get('/admin/manage', [AdminManagementController::class, 'index'])->name('admin.manage');
    Route::post('/admin/create', [AdminManagementController::class, 'store'])->name('admin.create');

    // User profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ---------------------------
// Dashboard (default Breeze fallback)
// ---------------------------
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ---------------------------
// Auth scaffolding (from Breeze)
// ---------------------------
require __DIR__.'/auth.php';

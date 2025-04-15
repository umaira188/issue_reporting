<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\FeedbackController;

// ---------------------------
// Guest Routes (Login, Register)
// ---------------------------
Route::middleware('guest')->group(function () {
    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::get('/register', fn() => view('auth.register'))->name('register');
});

// ---------------------------
// Public Welcome Page
// ---------------------------
Route::get('/', fn() => view('welcome'))->name('welcome');

// ---------------------------
// Authenticated User Routes
// ---------------------------
Route::middleware(['auth'])->group(function () {

    // 📌 Complaint Features
    Route::get('/lodge-complaint', fn() => view('lodge-complaint'))->name('lodge-complaint');
    Route::post('/submit-complaint', [ComplaintController::class, 'store'])->name('submit-complaint');
    Route::get('/complaint-history', [ComplaintController::class, 'history'])->name('complaint.history');

    // 💬 Feedback
    Route::get('/feedback', fn() => view('feedback'))->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.submit');

    // 🛠 Admin Dashboards
    Route::get('/admin/env-police', [ComplaintController::class, 'envPoliceDashboard'])->name('admin.env');
    Route::get('/admin/municipal', [ComplaintController::class, 'municipalDashboard'])->name('admin.municipal');
    Route::get('/admin/division-office', [ComplaintController::class, 'divisionOfficeDashboard'])->name('admin.division');

    // 👑 Super Admin Panel
    Route::get('/admin/manage', [AdminManagementController::class, 'index'])->name('admin.manage');
    Route::post('/admin/create', [AdminManagementController::class, 'store'])->name('admin.create');

    // 👤 Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ---------------------------
// Breeze Default Dashboard
// ---------------------------
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ---------------------------
// Breeze Auth Routes
// ---------------------------
require __DIR__.'/auth.php';

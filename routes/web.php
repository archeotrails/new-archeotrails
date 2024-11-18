<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, HomeController, PlaceController, AdminController, ValidatorController};

// Main route for the homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Profile and other user views
Route::get('/profile', fn() => view('profile'))->name('profile')->middleware('auth');

// Place management routes
Route::resource('places', PlaceController::class);

// Validator dashboard routes
Route::middleware(['auth'])->group(function () {
    Route::get('/validator/dashboard', [ValidatorController::class, 'index'])->name('validator.dashboard');
    Route::post('/validator/accept/{id}', [ValidatorController::class, 'accept'])->name('validator.accept');
    Route::post('/validator/reject/{id}', [ValidatorController::class, 'reject'])->name('validator.reject');
});

// Admin-specific routes (add middleware if necessary)
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin']);
Route::get('/admin/register', [AuthController::class, 'showAdminRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'adminRegister']);

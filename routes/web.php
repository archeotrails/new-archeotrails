<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, HomeController, PlaceController, AdminController, ValidatorController, DashboardController, DestinationController, ProfileController, ReviewController};

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

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::delete('/admin/admin/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');
    Route::delete('/admin/validator/{id}', [AdminController::class, 'deleteValidator'])->name('admin.deleteValidator');
});

// Admin-specific routes (add middleware if necessary)
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin']);
Route::get('/admin/register', [AuthController::class, 'showAdminRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'adminRegister']);

Route::post('/admin/validators', [AuthController::class, 'create'])->name('admin.usercreate');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/destinations', [DestinationController::class, 'showDestinations'])->name('destinations');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});

Route::delete('/places/{place}', [PlaceController::class, 'destroy'])->name('places.destroy');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/places/{place}', [PlaceController::class, 'show'])->name('places.show');

Route::get('/places/{place}/edit', [PlaceController::class, 'edit'])->name('places.edit');

//reviews
Route::middleware(['auth'])->group(function() {
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/places/{id}', [PlaceController::class, 'showReviews'])->name('places.show');

Route::get('/places/{id}/reviews', [PlaceController::class, 'showReviews'])->name('places.reviews');

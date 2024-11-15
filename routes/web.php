<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Include this only once at the top
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Routes for login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Routes for register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/browse', function () {
    return view('browse');
})->name('browse');

// routes/web.php

use App\Http\Controllers\DestinationController;

Route::get('/', [DestinationController::class, 'showHomePage'])->name('home');
Route::get('/destinations', [DestinationController::class, 'showDestinations'])->name('destinations');



Route::get('/', [PlaceController::class, 'showHomePage'])->name('home');


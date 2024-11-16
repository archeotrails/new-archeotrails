<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('login'); // Ensure your login view is named correctly
    }

    // Handle login logic
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
        'role' => 'required', // Assuming you have a dropdown or input to select role
    ]);

    $credentials = $request->only('email', 'password');

    if ($request->role === 'admin' && Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('admin.dashboard')->with('success', 'Welcome, Admin!');
    } elseif ($request->role === 'validator' && Auth::guard('validator')->attempt($credentials)) {
        return redirect()->route('validator.dashboard')->with('success', 'Welcome, Validator!');
    } elseif ($request->role === 'user' && Auth::guard('web')->attempt($credentials)) {
        return redirect()->route('home')->with('success', 'Welcome, User!');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials or role. Please try again.',
    ])->withInput();
}


    

    // Handle logout logic
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }

    // Display the registration form
  

    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle registration logic
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users|unique:admins|unique:validators',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin,validator'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        switch ($request->role) {
            case 'admin':
                Admin::create($data);
                Auth::guard('admin')->attempt($request->only('email', 'password'));
                break;
            case 'validator':
                Validator::create($data);
                Auth::guard('validator')->attempt($request->only('email', 'password'));
                break;
            default:
                User::create($data);
                Auth::attempt($request->only('email', 'password'));
        }

        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}


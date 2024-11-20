<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Validator; // Make sure this model exists and is imported
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
        'role' => 'required|string|in:user,admin,validator',
    ]);

    $credentials = $request->only('email', 'password');

    $credentials = $request->only('email', 'password', 'role');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'validator') {
                return redirect()->route('validator.dashboard');
            } else {
                return redirect()->route('home');
            }
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
    // Handle admin/validator registration logic

    public function adminRegister(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:admins|unique:validators',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|in:admin,validator',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ];

    // Create the user record based on the role
    if ($request->role === 'admin') {
        Admin::create($data);
    } else {
        Validator::create($data);
    }

    return redirect()->route('admin.dashboard')->with('success', 'Admin/Validator registered successfully!');
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
                // Admin::create($data);
                User::create($data);
                Auth::guard('admin')->attempt($request->only('email', 'password'));
                break;
            case 'validator':
                // Validator::create($data);
                User::create($data);
                Auth::guard('validator')->attempt($request->only('email', 'password'));
                break;
            default:
                User::create($data);
                Auth::attempt($request->only('email', 'password'));
        }

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    
    // Register users //////////////////////////////////////////////
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin,validator',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('home')->with('success', 'User created successfully!');
        
    }
}



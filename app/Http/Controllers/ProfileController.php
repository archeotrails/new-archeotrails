<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     */
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = auth()->user();

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'current_password' => ['required_with:new_password', 'current_password'],
            'new_password' => ['nullable', 'confirmed', Password::defaults()],
        ];

        $validatedData = $request->validate($rules);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if ($request->filled('new_password')) {
            $user->password = Hash::make($validatedData['new_password']);
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }
}
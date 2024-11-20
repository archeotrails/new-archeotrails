<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
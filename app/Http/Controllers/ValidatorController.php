<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatorController extends Controller
{
    /**
     * Display the validator dashboard.
     */
    public function index()
    {
        return view('validator.dashboard'); // Ensure this view file is in 'resources/views/validator/dashboard.blade.php'
    }
}

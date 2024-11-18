<?php

namespace App\Http\Controllers;

use App\Models\Place; // Ensure Place model is imported
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        // Fetch all places and pass them to the view
        $places = Place::all(); // Retrieve all places
        return view('admin.dashboard', compact('places'));
    }
}

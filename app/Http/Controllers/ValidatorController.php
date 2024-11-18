<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class ValidatorController extends Controller
{
    /**
     * Display the validator dashboard with a list of submitted places.
     */
    public function index()
    {
        // Fetch places with status 'pending'
        $pendingPlaces = Place::where('status', 'pending')->get();
        return view('validator.dashboard', compact('pendingPlaces'));
    }

    /**
     * Accept a place and update its status to 'accepted'.
     */
    public function accept($id)
    {
        $place = Place::findOrFail($id);
        $place->status = 'accepted';
        $place->save();

        return redirect()->route('validator.dashboard')->with('success', 'Place has been accepted and will be published.');
    }

    /**
     * Reject a place and delete it from the database.
     */
    public function reject($id)
    {
        $place = Place::findOrFail($id);
        $place->delete(); // Delete the place record from the database

        return redirect()->route('validator.dashboard')->with('success', 'Place has been rejected and removed.');
    }
}

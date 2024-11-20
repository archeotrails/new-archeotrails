<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ensure there is data in the database for these queries to return results
        $archeologicalPlaces = Place::where('category', 'Archeological')->where('status', 'accepted')->get();
        $historicalPlaces = Place::where('category', 'Historical')->where('status', 'accepted')->get();
        $urbanPlaces = Place::where('category', 'Urban')->where('status', 'accepted')->get();

        // Pass the data to the view
        return view('home', compact('archeologicalPlaces', 'historicalPlaces', 'urbanPlaces'));
    }
}


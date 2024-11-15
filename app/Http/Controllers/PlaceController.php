<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Show the home page with categorized places.
     */
    public function showHomePage()
    {
        // Fetch data for each category
        $archeologicalPlaces = Place::where('category', 'Archeological')->get();
        $historicalPlaces = Place::where('category', 'Historical')->get();
        $urbanPlaces = Place::where('category', 'Urban')->get();

        // Check if the data was retrieved successfully
        if ($archeologicalPlaces->isEmpty() && $historicalPlaces->isEmpty() && $urbanPlaces->isEmpty()) {
            // Optionally log or handle the case when no data is found
        }

        // Pass the data to the 'home' view
        return view('home', compact('archeologicalPlaces', 'historicalPlaces', 'urbanPlaces'));
    }
}

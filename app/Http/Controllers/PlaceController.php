<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        // Pass the data to the 'home' view
        return view('home', compact('archeologicalPlaces', 'historicalPlaces', 'urbanPlaces'));
    }

    /**
     * Show the form for creating a new place.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created place in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'location' => 'required|string',
            'photo' => 'required|image|max:2048', // Validate image size
        ]);

        try {
            // Store the photo and save the new place record
            $photoPath = $request->file('photo')->store('photos', 'public');

            Place::create([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'location' => $request->location,
                'photo' => $photoPath, // Save the photo path
            ]);

            return redirect()->route('places.index')->with('success', 'Place added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }
}

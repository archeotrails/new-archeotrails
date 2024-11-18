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
            'district' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            // Store the uploaded photo and get the path
            $photoPath = $request->file('photo')->store('photos', 'public');
    
            // Create a new Place record
            Place::create([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'location' => $request->location,
                'district' => $request->district,
                'photo' => $photoPath,
                'suggested_by' => auth()->id(), // Make sure the user is authenticated
                'status' => 'Pending', // Default status
            ]);
    
            return redirect()->route('home')->with('success', 'Place added successfully!');
        } catch (\Exception $e) {
            \Log::error('Error storing place: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }
    

}


    

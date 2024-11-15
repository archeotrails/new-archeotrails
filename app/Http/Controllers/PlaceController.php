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

    public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'review' => 'required|string',
        'category' => 'required|string',
        'location' => 'required|string',
        'visited_date' => 'required|date',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $path = $request->file('photo')->store('photos', 'public');

    $place = new Place();
    $place->name = $validated['name'];
    $place->description = $validated['description'];
    $place->review = $validated['review'];
    $place->category = $validated['category'];
    $place->location = $validated['location'];
    $place->visited_date = $validated['visited_date'];
    $place->photo_path = $path;
    $place->status = 'Pending';
    $place->save();

    return redirect()->route('home')->with('success', 'Place submitted for validation.');
}

}

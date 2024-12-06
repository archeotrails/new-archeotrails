<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Review;
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
        if (auth()->check()) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'location' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
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
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'district' => $request->district,
                'photo' => $photoPath,
                'suggested_by' => auth()->id(), // Make sure the user is authenticated
                'status' => 'pending', // Default status
            ]);

            return redirect()->route('places.create')->with('success', 'The place has been sent to the validation process.');
        } catch (\Exception $e) {
            \Log::error('Error storing place: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    } else {
        return redirect()->route('login')->withErrors('You must be logged in to submit a place.');
    }
    

}

public function destroy(Place $place)
{
    // Delete the photo from storage
    if (Storage::disk('public')->exists($place->photo)) {
        Storage::disk('public')->delete($place->photo);
    }

    // Delete the place record from the database
    $place->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Place deleted successfully.');
}

public function show(Place $place)
    {
        return view('places.show', compact('place'));
    }

    public function edit(Place $place)
{
    return view('places.edit', compact('place'));
}

public function update(Request $request, Place $place)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string',
        'location' => 'required|string',
        'longitude' => 'required|string',
        'latitude' => 'required|string',
        'district' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        // Delete the old photo
        if (Storage::disk('public')->exists($place->photo)) {
            Storage::disk('public')->delete($place->photo);
        }
        // Store the new photo
        $photoPath = $request->file('photo')->store('photos', 'public');
        $place->photo = $photoPath;
    }

    $place->update($request->only('name', 'description', 'category', 'location', 'longitude', 'latitude', 'district'));

    return redirect()->route('admin.dashboard')->with('success', 'Place updated successfully!');
}
public function showReviews($id)  
    {
        $place = Place::findOrFail($id);
        $reviews = Review::where('place_id', $id)->get();
        return view('places.reviews', compact('place', 'reviews'));
    }

}
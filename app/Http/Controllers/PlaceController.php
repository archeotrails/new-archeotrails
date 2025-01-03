<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    /**
     * Show the home page with categorized places.
     */
    public function showHomePage()
    {
        $archeologicalPlaces = Place::where('category', 'Archeological')->get();
        $historicalPlaces = Place::where('category', 'Historical')->get();
        $urbanPlaces = Place::where('category', 'Urban')->get();

        return view('home', compact('archeologicalPlaces', 'historicalPlaces', 'urbanPlaces'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $results = Place::where('name', 'like', '%' . $search . '%')->get();
        
        if ($results->count() === 0) {
            $suggestions = collect();
            
            $categories = ['Archeological', 'Historical', 'Urban'];
            foreach ($categories as $category) {
                $categoryPlaces = Place::where('category', $category)
                                    ->inRandomOrder()
                                    ->limit(2)
                                    ->get();
                $suggestions = $suggestions->concat($categoryPlaces);
            }
            
            session([
                'search_results' => $suggestions,
                'search_query' => $search,
                'no_exact_match' => true,
                'showing_suggestions' => true
            ]);
        } else {
            session([
                'search_results' => $results,
                'search_query' => $search,
                'no_exact_match' => false,
                'showing_suggestions' => false
            ]);
        }
        
        $archeologicalPlaces = Place::where('category', 'Archeological')->get();
        $historicalPlaces = Place::where('category', 'Historical')->get();
        $urbanPlaces = Place::where('category', 'Urban')->get();
        
        return view('home', compact(
            'results',
            'archeologicalPlaces',
            'historicalPlaces',
            'urbanPlaces'
        ));
    }

    public function clearSearch()
    {
        session()->forget([
            'search_results',
            'search_query',
            'no_exact_match',
            'showing_suggestions'
        ]);
        return redirect()->route('home');
    }
    
    public function searchshow(Place $place) 
    {
        session()->forget(['search_results', 'search_query', 'no_exact_match']);
        return view('places.show', compact('place'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'category' => 'required|string',
                'location' => 'required|string',
                'longitude' => 'nullable|string',
                'latitude' => 'nullable|string',
                'district' => 'required|string',
                'photo' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:2048',
            ]);
        
            try {
                $photoPath = $request->file('photo')->store('photos', 'public');
        
                Place::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category' => $request->category,
                    'location' => $request->location,
                    'longitude' => $request->longitude,
                    'latitude' => $request->latitude,
                    'district' => $request->district,
                    'photo' => $photoPath,
                    'suggested_by' => Auth::id(),
                    'status' => 'pending',
                ]);

                return redirect()->route('places.create')->with('success', 'The place has been sent to the validation process.');
            } catch (\Exception $e) {
                Log::error('Error storing place: ' . $e->getMessage());
                return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
            }
        } else {
            return redirect()->route('login')->withErrors('You must be logged in to submit a place.');
        }
    }

    public function destroy(Place $place)
    {
        if (Storage::disk('public')->exists($place->photo)) {
            Storage::disk('public')->delete($place->photo);
        }

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
            if (Storage::disk('public')->exists($place->photo)) {
                Storage::disk('public')->delete($place->photo);
            }
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

//     public function getNearbyPlaces(Request $request)
//     {
//         $validated = $request->validate([
//             'lat' => 'required|numeric|between:-90,90',
//             'lng' => 'required|numeric|between:-180,180'
//         ]);

//         $latitude = $validated['lat'];
//         $longitude = $validated['lng'];
//         $radius = 20;

//         Log::info('Searching for places near:', [
//             'latitude' => $latitude,
//             'longitude' => $longitude,
//             'radius' => $radius
//         ]);

//         try {
//             $places = Place::selectRaw("
//                 *,
//                 (6371 * acos(
//                     cos(radians(?)) * cos(radians(latitude)) *
//                     cos(radians(longitude) - radians(?)) +
//                     sin(radians(?)) * sin(radians(latitude))
//                 )) AS distance", [$latitude, $longitude, $latitude])
//                 ->whereNotNull('latitude')
//                 ->whereNotNull('longitude')
//                 ->having('distance', '<=', $radius)
//                 ->orderBy('distance', 'asc')
//                 ->get();

//             Log::info('Found places:', ['count' => $places->count()]);

//             if ($places->isEmpty()) {
//                 return response()->json([
//                     'message' => 'No places found within 20km of your location',
//                     'places' => []
//                 ], 200);
//             }

//             return response()->json([
//                 'places' => $places->map(function($place) {
//                     return [
//                         'id' => $place->id,
//                         'name' => $place->name,
//                         'photo' => asset('storage/' . $place->photo),
//                         'distance' => round($place->distance, 1),
//                         'category' => $place->category,
//                         'location' => $place->location
//                     ];
//                 })
//             ]);
//         } catch (\Exception $e) {
//             Log::error('Error finding nearby places:', [
//                 'error' => $e->getMessage(),
//                 'trace' => $e->getTraceAsString()
//             ]);

//             return response()->json([
//                 'message' => 'An error occurred while finding nearby places',
//                 'error' => $e->getMessage()
//             ], 500);
//         }
//     }
}
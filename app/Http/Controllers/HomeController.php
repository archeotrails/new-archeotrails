<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $archeologicalPlaces = Place::where('category', 'Archeological')
            ->where('status', 'accepted')
            ->get();
            
        $historicalPlaces = Place::where('category', 'Historical')
            ->where('status', 'accepted')
            ->get();
            
        $urbanPlaces = Place::where('category', 'Urban')
            ->where('status', 'accepted')
            ->get();

        $preferredPlaces = null;
        if (session()->has('place_preference')) {
            $preferredPlaces = Place::where('category', session('place_preference'))
                ->where('status', 'accepted')
                ->inRandomOrder()
                ->limit(6)
                ->get();
        }

        return view('home', compact(
            'archeologicalPlaces',
            'historicalPlaces',
            'urbanPlaces',
            'preferredPlaces'
        ));

    
    }

    public function clearPreference()
        {
            session()->forget(['place_preference', 'initial_popup_shown']);
            return redirect()->route('home')->with('success', 'Personalized suggestions have been cleared.');
        }
}
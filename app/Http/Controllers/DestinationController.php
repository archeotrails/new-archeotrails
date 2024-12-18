<?php

// app/Http/Controllers/DestinationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // Show the home page with featured destinations
    public function showHomePage()
    {
        // Pass any data needed for the home page (e.g., featured places)
        return view('home'); // Ensure the 'home.blade.php' view exists in the 'resources/views' directory.
    }

    // Show the destinations page
    public function showDestinations()
    {
        // Pass data related to specific destinations if needed
        return view('destinations'); // Create a 'destinations.blade.php' view in the 'resources/views' directory.
    }

     
}


<?php

namespace App\Http\Controllers;

use App\Models\Review;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

  
   
    public function store(Request $request)
    {
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'content' => 'required|string|max:1000',

            function ($attribute, $value, $fail) {
                if (preg_match('/^[^a-zA-Z0-9]+$/', $value)) {
                    $fail('Review must contain valid text');
                }

                $badWords = ['fuck', 'shit', 'damn', 'bullshit'];
                foreach ($badWords as $key => $word) {
                    if (stripos($value, $word) !== false) {
                        $fail('Review contains inappropriate language');
                        break;
                    }
                }
            }

        ]);

        Review::create([
            'user_id' => auth()->id(),
            'place_id' => $request->place_id,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}

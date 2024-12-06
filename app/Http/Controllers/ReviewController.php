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
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'place_id' => $request->place_id,
            'content' => $request->content,
        ]);
        return back()->with('success', 'Your review has been submitted!');
    }
    public function destroy($id)
    {
        // Find the review by its ID
        $review = Review::findOrFail($id);

        // Delete the review
        $review->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}

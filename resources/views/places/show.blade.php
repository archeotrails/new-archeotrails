@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-4 bg-white shadow rounded">
    <h2 class="text-3xl font-bold mb-4">{{ $place->name }}</h2>
    <img src="{{ asset('storage/' . $place->photo) }}" alt="{{ $place->name }}" class="rounded mb-4 w-full max-w-md mx-auto">
    <p class="text-lg text-gray-700">{{ $place->description }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>Category:</strong> {{ $place->category }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>Location:</strong> {{ $place->location }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>District:</strong> {{ $place->district }}</p>

    @auth
    <!-- Review Form -->
    <div class="mt-6">
        <h3 class="text-2xl font-bold mb-2">Write a Review</h3>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <input type="hidden" name="place_id" value="{{ $place->id }}">
            <textarea 
                name="content" 
                rows="4" 
                class="w-full p-2 border rounded" 
                placeholder="Write your review here..." 
                required></textarea>
            <button 
                type="submit" 
                class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Submit
            </button>
        </form>
    </div>
    @endauth

    @guest
    <!-- Message for Unauthenticated Users -->
    <div class="mt-6 text-red-500">
        <p><strong>You must be logged in to write a review.</strong></p>
    </div>
    @endguest

    <!-- Display Reviews -->
    <div class="mt-6">
        <h3 class="text-2xl font-bold mb-2">Reviews</h3>
        @if($place->reviews->isEmpty())
            <p class="text-gray-700">No reviews yet. Be the first to write one!</p>
        @else
            @foreach($place->reviews as $review)
                <div class="mt-4 p-4 border rounded bg-gray-50">
                    <p class="text-lg font-semibold">{{ $review->user->name }}</p>
                    <p class="text-gray-700">{{ $review->content }}</p>
                    <p class="text-sm text-gray-500">{{ $review->created_at->format('F j, Y, g:i a') }}</p>
                </div>
             @endforeach
    
        @endif
    </div>
</div>

@endsection
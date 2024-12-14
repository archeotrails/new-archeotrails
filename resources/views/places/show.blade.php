@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6 p-4 bg-white shadow rounded">
    <!-- Place Header -->
    <h2 class="text-2xl font-bold mb-4 text-gray-800">{{ $place->name }}</h2>
    
    <!-- Image and Content Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <!-- Image on the left -->
        <div>
            <img src="{{ asset('storage/' . $place->photo) }}" 
                 alt="{{ $place->name }}" 
                 class="rounded shadow-md w-full h-64 object-cover">
        </div>
        <div class="p-3 bg-gray-50 rounded-lg shadow">
            <p class="text-sm text-gray-700">{{ $place->description }}</p>
        </div>
        
        <!-- Content on the right -->
        <div class="space-y-3">
            <!-- Description Card -->
            
            
            <!-- Details -->
            <div class="grid grid-cols-2 gap-2 text-sm">
                <div class="p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Category:</span> {{ $place->category }}
                </div>
                <div class="p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Location:</span> {{ $place->location }}
                </div>
                <div class="p-2 bg-gray-50 rounded">
                    <span class="font-semibold">District:</span> {{ $place->district }}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Review Form -->
    @auth
    <div class="mt-4 p-3 rounded shadow-md">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <h3 class="text-lg font-bold mb-2">Write a Review</h3>
        <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST" class="space-y-2">
            @csrf
            <input type="hidden" name="place_id" value="{{ $place->id }}">
            <textarea
                id= "reviewContent"
                name="content"
                rows="3"
                class="w-full p-2 border rounded text-sm"
                placeholder="Share your experience..."
                required>{{old('content')}}</textarea>

            @error('content')
                <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror

            <!-- user_side validation message -->
            <p id="validationMessage" class="text-red-500 text-sm hidden"></p>

            <button
                type="submit"
                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm">
                Submit Review
            </button>
        </form>
    </div>
    @endauth
    
    @guest
    <div class="mt-4 p-2 bg-red-50 border border-red-200 rounded text-sm">
        <p class="text-red-600 text-center">
            Please <a href="{{ route('login') }}" class="underline">log in</a> to write a review.
        </p>
    </div>
    @endguest
    
    <!-- Reviews Section -->
    <div class="mt-4">
        <h3 class="text-lg font-bold mb-2">Reviews</h3>
        @if($place->reviews->isEmpty())
            <p class="text-sm text-gray-600 text-center py-4 bg-gray-50 rounded">No reviews yet. Be the first to write one!</p>
        @else
            <div class="space-y-3">
                @foreach($place->reviews as $review)
                    <div class="p-3 border rounded border-black bg-gray-50 shadow-sm">
                        <div class="flex items-center mb-2">
                            <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-white text-sm">{{ substr($review->user->name, 0, 1) }}</span>
                            </div>
                            <div class="ml-2">
                                <p class="font-semibold text-sm">{{ $review->user->name }}</p>
                                <p class="text-xs text-gray-500">{{ $review->created_at->format('F j, Y, g:i a') }}</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700">{{ $review->content }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const successMessage = document.querySelector('.bg-green-100');
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.transition = 'opacity 0.5s ease';
            successMessage.style.opacity = '0';
            setTimeout(function() {
                successMessage.remove();
            }, 500);
        }, 3000);
    }
});
document.getElementById('reviewForm').addEventListener('submit', function(e){
    const content = document.getElementById('reviewContent').value;
    const validationMessage = document.getElementById('validationMessage');

    validationMessage.classList.add('hidden');

    if (!content.trim()){
        e.preventDefault();
        validationMessage.textContent = 'Review cannot be empty';
        validationMessage.classList.remove('hidden');
        return;
    }
    if (content.trim().length > 0 && !/[a-zA-Z0-9]/.test(content)) {
        e.preventDefault();
        validationMessage.textContent = 'Review must contain at least one letter or number, not just special characters.';
        validationMessage.classList.remove('hidden');
        return;
    }
    const badWords = ['fuck', 'shit', 'damn'];
    if (badWords.some(word => content.toLowerCase().includes(word))) {
        e.preventDefault();
        validationMessage.textContent = 'Review contains inappropiate language. please revise your review';
        validationMessage.classList.remove('hidden');
        return;
    }
});
</script>
@endsection
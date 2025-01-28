@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative w-full h-[500px] overflow-hidden">
    <div class="absolute inset-0">
        <div class="slideshow">
            <img class="slide h-full w-full object-cover" src="{{ asset('images/destination.webp') }}" alt="">
            <img class="slide h-full w-full object-cover" src="{{ asset('images/destination1.jpg') }}" alt="">
            <img class="slide h-full w-full object-cover" src="{{ asset('images/destination3.webp') }}" alt="">
        </div>

    </div>

    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white bg-black bg-opacity-50">
        <h1 class="text-4xl font-bold mb-4">Discover Hidden Gems</h1>
        <p class="max-w-2xl text-lg">
            Discover the untold stories of forgotten places. From ancient ruins to hidden villages, each location reveals a unique piece of history. Plan your journey and uncover these hidden gems.
        </p>

    </div>
</div>
<!-- Plan Your Trip Button -->
<div class="flex justify-center my-8">
    <button class="bg-green-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-green-700">
        Plan Your Trip
    </button>
    
</div>


<div>
    @livewire('google-map')
</div>


@endsection
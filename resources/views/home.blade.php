@extends('layouts.app')

@section('content')

<div class="relative w-full h-[500px] overflow-hidden">
    <div class="absolute inset-0">
        <div class="slideshow">
            <div class="slide bg-cover bg-center h-full" style="background-image: url('{{ asset('images/picture1.jpg') }}');"></div>
            <div class="slide bg-cover bg-center h-full hidden" style="background-image: url('{{ asset('images/picture2.jpg') }}');"></div>
            <div class="slide bg-cover bg-center h-full hidden" style="background-image: url('{{ asset('images/picture3.jpg') }}');"></div>
        </div>
    </div>

    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white bg-black bg-opacity-50">
        <h1 class="text-4xl font-bold mb-4">Discover Hidden Gems</h1>
        <p class="max-w-2xl text-lg">
            Discover the untold stories of forgotten places. From ancient ruins to hidden villages, each location reveals a unique piece of history. Plan your journey and uncover these hidden gems.
        </p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('hidden', i !== index);
            });
        }

        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000); 
    });
</script>

<section class="my-8">
    <h3 class="text-3xl font-bold mb-4">Archeological Places</h3>
    @if($archeologicalPlaces->isEmpty())
        <p class="text-gray-500">No archeological places found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($archeologicalPlaces as $place)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ $place->image_url ?? asset('images/placeholder.jpg') }}" alt="{{ $place->name }}" class="rounded mb-2">
                <h4 class="text-xl font-semibold">{{ $place->name }}</h4>
                <p class="text-gray-600 truncate">{{ $place->description }}</p>
                <a href="{{ route('places.show', $place->id) }}" class="text-blue-600 hover:underline">View Details</a>
            </div>
            @endforeach
        </div>
    @endif
</section>

<section class="my-8">
    <h3 class="text-3xl font-bold mb-4">Historical Places</h3>
    @if($historicalPlaces->isEmpty())
        <p class="text-gray-500">No historical places found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($historicalPlaces as $place)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ $place->image_url ?? asset('images/placeholder.jpg') }}" alt="{{ $place->name }}" class="rounded mb-2">
                <h4 class="text-xl font-semibold">{{ $place->name }}</h4>
                <p class="text-gray-600 truncate">{{ $place->description }}</p>
                <a href="{{ route('places.show', $place->id) }}" class="text-blue-600 hover:underline">View Details</a>
            </div>
            @endforeach
        </div>
    @endif
</section>

<section class="my-8">
    <h3 class="text-3xl font-bold mb-4">Urban Life</h3>
    @if($urbanPlaces->isEmpty())
        <p class="text-gray-500">No urban places found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($urbanPlaces as $place)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ $place->image_url ?? asset('images/placeholder.jpg') }}" alt="{{ $place->name }}" class="rounded mb-2">
                <h4 class="text-xl font-semibold">{{ $place->name }}</h4>
                <p class="text-gray-600 truncate">{{ $place->description }}</p>
                <a href="{{ route('places.show', $place->id) }}" class="text-blue-600 hover:underline">View Details</a>
            </div>
            @endforeach
        </div>
    @endif
</section>

@endsection

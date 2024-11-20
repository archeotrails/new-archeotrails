@extends('layouts.app')

@section('content')

<!-- Slideshow Section -->
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
            Welcome to Archeotrails! We are dedicated to helping you discover hidden gems and historical places around the world. 
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

        showSlide(currentSlide); // Show the first slide initially

        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000); 
    });
</script>

<!-- About Section -->
<div class="container mx-auto mt-10 p-4 bg-white shadow rounded flex flex-col md:flex-row">
    <div class="md:w-1/2 md:pr-8">
        <h2 class="text-3xl font-bold mb-4">About Us</h2>
        <p class="text-lg text-gray-700">
            We at Archeotrails want users to experience the best and valuable places in Sri Lanka, which are rich with culture and history. We are a team that collaborates with the archeological department to provide our users with the best experience.
        </p>
        <p class="text-lg text-gray-700 mt-4">
            Our vision is to promote the Sri Lankan’s places that are enriched with culture and create a small community who are fond of this culture
        </p>
    </div>
    <div class="md:w-1/3 mt-8 md:mt-0 ">
        <img src="{{ asset('images/about.jpeg') }}" alt="About Us" class="rounded shadow w-full">
    </div>
</div>

@endsection
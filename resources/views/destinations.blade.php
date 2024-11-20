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
        <div class="w-full max-w-lg mt-4">
            <input type="text" placeholder="Search for places, attractions, or landmarks" class="w-full p-3 rounded-full text-gray-900">
        </div>
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


<!-- Plan Your Trip Button -->
<div class="flex justify-center my-8">
    <button class="bg-green-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-green-700">
        Plan Your Trip
    </button>
</div>

<!-- Search Fields -->
<div class="flex justify-center space-x-4 mb-8">
    <input type="text" placeholder="Enter your starting location" class="p-3 border rounded-lg w-64">
    <input type="text" placeholder="Find and select your destination" class="p-3 border rounded-lg w-64">
</div>

<!-- Featured Destinations Section -->
<section class="px-4 md:px-16">
    <h3 class="text-3xl font-bold mb-6">Featured Destinations</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Destination 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2021/01/Yapahuwa-Rock-Fortress.jpg" alt="Yapahuwa Rock Fortress" class="w-full h-48 object-cover">
            <div class="p-4">
                <h4 class="text-xl font-semibold">Yapahuwa Rock Fortress</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        
        <!-- Destination 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/06/e9/f4/0f.jpg" alt="Polonnaruwa Rock Fortress" class="w-full h-48 object-cover">
            <div class="p-4">
                <h4 class="text-xl font-semibold">Sigiriya Rock Fortress</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script>
    function initMap() {
        var location = { lat: 37.3860517, lng: -122.0838511 }; // Replace with your coordinates
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>

    <div class="w-full md:w-1/3 p-4">
        <h3 class="text-xl font-bold mb-2">Map View</h3>
        <div class="border rounded shadow">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1234!2d-122.0812683!3d37.3860517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb0d5e17d3b41%3A0x4e04124b732f4d1f!2sGoogleplex!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>
    <!-- Customize Route Button -->
    <div class="flex justify-center mt-8">
        <button class="bg-green-500 text-white font-semibold py-3 px-6 rounded-full hover:bg-red-600">
            Customize route
        </button>
    </div>
</section>

@endsection
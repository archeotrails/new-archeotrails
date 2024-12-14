@extends('layouts.app')

@section('content')
    <!-- Hero Section with Slideshow -->
    <div class="relative w-full h-[600px] overflow-hidden">
        <div class="absolute inset-0">
            <div class="slideshow">
                <img class="slide h-full w-full object-cover transition-opacity duration-1000" src="{{ asset('images/slideshow3.jpg') }}" alt="">
                <img class="slide h-full w-full object-cover transition-opacity duration-1000" src="{{ asset('images/slideshow2.webp') }}" alt="">
                <img class="slide h-full w-full object-cover transition-opacity duration-1000" src="{{ asset('images/slideshow4.jpg') }}" alt="">
            </div>
        </div>

        <!-- Hero Content -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white bg-gradient-to-b from-black/40 to-black/70">
            <h1 class="text-5xl font-bold mb-6 tracking-tight animate-fade-in">
                Discover Hidden Gems
            </h1>
            <p class="max-w-2xl text-lg leading-relaxed mx-4 animate-fade-in-up">
                Discover the untold stories of forgotten places. From ancient ruins to hidden villages, each location
                reveals a unique piece of history. Plan your journey and uncover these hidden gems.
            </p>
            <a href="#explore" class="mt-8 px-8 py-3 bg-white text-black rounded-full hover:bg-opacity-90 transition-all duration-300 font-semibold animate-bounce">
                Explore Now
            </a>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container mx-auto px-4 py-12">
        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="p-6 bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-amber-800">Archeological Sites</h4>
                <p class="text-amber-700">Explore ancient ruins and discover the mysteries of past civilizations.</p>
            </div>
            <div class="p-6 bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-emerald-800">Historical Places</h4>
                <p class="text-emerald-700">Step back in time and experience the rich history of remarkable locations.</p>
            </div>
            <div class="p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-800">Urban Life</h4>
                <p class="text-blue-700">Immerse yourself in the vibrant culture of city landscapes and modern heritage.</p>
            </div>
        </div>

        <!-- Sections -->
        <section id="explore" class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-3xl font-bold text-gray-800">Archeological Places</h3>
                <div class="h-px bg-gray-200 flex-grow mx-4"></div>
                <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">View All</a>
            </div>
            @if ($archeologicalPlaces->isEmpty())
                <div class="bg-amber-50 rounded-lg p-8 text-center">
                    <p class="text-amber-800">No archeological places found.</p>
                </div>
            @else
                <x-slider type="archeological" :places="$archeologicalPlaces" />
            @endif
        </section>

        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-3xl font-bold text-gray-800">Historical Places</h3>
                <div class="h-px bg-gray-200 flex-grow mx-4"></div>
                <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">View All</a>
            </div>
            @if ($historicalPlaces->isEmpty())
                <div class="bg-emerald-50 rounded-lg p-8 text-center">
                    <p class="text-emerald-800">No historical places found.</p>
                </div>
            @else
                <x-slider type="historicalPlaces" :places="$historicalPlaces" />
            @endif
        </section>

        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-3xl font-bold text-gray-800">Urban Life</h3>
                <div class="h-px bg-gray-200 flex-grow mx-4"></div>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">View All</a>
            </div>
            @if ($urbanPlaces->isEmpty())
                <div class="bg-blue-50 rounded-lg p-8 text-center">
                    <p class="text-blue-800">No urban places found.</p>
                </div>
            @else
                <x-slider type="urbanPlaces" :places="$urbanPlaces" />
            @endif
        </section>

        
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }

        .slide {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide:not(.hidden) {
            opacity: 1;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove('hidden');
                        setTimeout(() => slide.style.opacity = 1, 0);
                    } else {
                        slide.style.opacity = 0;
                        setTimeout(() => slide.classList.add('hidden'), 1000);
                    }
                });
            }

            showSlide(0); // Show first slide immediately

            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }, 5000);
        });
    </script>
@endsection
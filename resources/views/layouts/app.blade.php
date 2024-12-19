<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Archeotrails') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

    <!-- Header with Navigation -->
    <header class="bg-green-700 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <a href="{{ route('home') }}">Archeotrails</a>
            </h1>
            <!-- Navigation Bar -->
            <nav>
                <div class="flex space-x-8">
                    <a href="/" class="text-lg font-semibold text-gray-100 hover:text-blue-200">Home</a>
                    <a href="/destinations" id="destination"
                        class="text-lg font-semibold text-gray-100 hover:text-blue-200">Destinations</a>
                    <a href="/about" class="text-lg font-semibold text-gray-100 hover:text-blue-200">About</a>
                    <a href="{{ route('places.create') }}"
                        class="text-lg font-semibold text-gray-100 hover:text-blue-200">Add Place</a>
                </div>
            </nav>
            <!-- User Section -->
            <div class="relative">
                @guest
                    <div class="dropdown inline-block relative">
                        <button class="text-lg font-semibold text-gray-100 hover:text-blue-200 flex items-center mr-10">
                            <img src="{{ asset('images/user.png') }}" alt="Profile" id="profile"
                                class="w-8 h-8 rounded-full">
                        </button>
                        <div id="login" class="dropdown-menu absolute hidden bg-white shadow-lg rounded w-48 mt-2">
                            <a href="{{ route('login') }}" id="login"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Login</a>
                            <a href="{{ route('register') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Register</a>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const dropdownButton = document.querySelector('.dropdown button');
                            const dropdownMenu = document.querySelector('.dropdown-menu');

                            dropdownButton.addEventListener('click', () => {
                                dropdownMenu.classList.toggle('hidden');
                            });
                        });
                    </script>
                @else
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('profile') }}"
                            class="text-lg font-semibold text-gray-100 hover:text-blue-200 flex items-center">
                            <img src="{{ asset('images/user.png') }}" alt="Profile" class="w-8 h-8 rounded-full mr-2">

                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" id="logout" class="text-gray-100 hover:text-red-400">Logout</button>
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Archeotrails. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>

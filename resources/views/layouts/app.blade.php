<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Archeotrails') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpI_7kANJiDrSmnMkKlaioMk1DPZYu6y0&libraries=places"></script>
    @livewireStyles
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100">
@livewireScripts
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
             <!-- language button -->

<style>
    .custom-translate {
        position: relative;
        display: inline-block;
    }

    .custom-translate select {
        appearance: none;
        background-color: transparent;
        border: 1px solid #ddd;
        padding: 8px 32px 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .custom-translate select:focus {
        outline: none;
        border-color: #4a8;
    }

    #google_translate_element {
        display: none;
    }
    .goog-te-banner-frame {
        display: none !important;
    }
    .goog-logo-link {
        display: none !important;
    }
    .goog-te-gadget span {
        display: none !important;
    }
</style>

 <div class="custom-translate">
    <select id="language-select" onchange="changeLanguage(this.value)">
        <option value="en">English</option>
        <option value="si">Sinhala</option>
        <option value="ta">Tamil</option>
        <option value="es">Spanish</option>
        <option value="fr">French</option>
        <option value="it">Italian</option>
        <option value="de">German</option>
        <option value="ja">Japanese</option>
        <option value="ko">Korean</option>
        <option value="pt">Portuguese</option>
        <option value="ru">Russian</option>
        <option value="zh-CN">Chinese</option>
    </select>
</div>

<div id="google_translate_element"></div> 

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,si,ta,es,fr,it,de,ja,ko,pt,ru,zh-CN',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
            autoDisplay: false,
            multilanguagePage: true,
        }, 'google_translate_element');
    }

    function changeLanguage(langCode) {
        var select = document.querySelector('select.goog-te-combo');
        if (select) {
            select.value = langCode;
            select.dispatchEvent(new Event('change'));
        }
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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

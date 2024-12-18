<div class="p-4">
    <div class="flex justify-center space-x-4 mb-8">
        <input id="startLocation" type="text" placeholder="Enter your starting location"
            class="p-3 border rounded-lg w-64">
        <input id="endLocation" type="text" placeholder="Find and select your destination"
            class="p-3 border rounded-lg w-64">
        <button onclick="getDirection()" class="p-3 bg-blue-500 text-white rounded-lg">Get Directions</button>
    </div>

    <!-- Message Display Area -->
    <div id="loginMessage" class="hidden text-red-600 font-semibold text-center mb-4"></div>

    <div class="flex items-start h-screen gap-8">
        <div id="googleMap" class="w-full h-full"></div>

        <div class="w-full h-full">
            <h2>Additional Content</h2>
            <p>This is the space for additional content, such as descriptions, user inputs, or any other relevant
                information.</p>
            <div>
                <ul id="places-list"></ul>
            </div>
        </div>
    </div>
</div>

<script>
    let directionsService;
    let directionsRenderer;
    let startAutocomplete;
    let endAutocomplete;
    let map;
    const placesList = document.getElementById("places-list");
    const loginMessage = document.getElementById("loginMessage");

    // Simulate user authentication status
    const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
    const samplePlaces = @json($places);

    function initMap() {
        const mapProp = {
            center: new google.maps.LatLng(6.905221589477516, 79.9133676248998),
            zoom: 10,
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        startAutocomplete = new google.maps.places.Autocomplete(document.getElementById("startLocation"));
        endAutocomplete = new google.maps.places.Autocomplete(document.getElementById("endLocation"));
    }

    function getDirection() {
        if (!isLoggedIn) {
            // Display the message
            loginMessage.textContent = "You need to log in first to use this feature.";
            loginMessage.classList.remove("hidden");
            loginMessage.classList.add("block");
            return;
        }

        // Hide the login message if user is logged in
        loginMessage.classList.add("hidden");
        loginMessage.classList.remove("block");

        const startPlace = startAutocomplete.getPlace();
        const endPlace = endAutocomplete.getPlace();

        if (!startPlace || !endPlace || !startPlace.geometry || !endPlace.geometry) {
            loginMessage.textContent = "Please select valid starting and destination locations.";
            loginMessage.classList.remove("hidden");
            return;
        }

        directionsService
            .route({
                origin: startPlace.geometry.location,
                destination: endPlace.geometry.location,
                travelMode: google.maps.TravelMode.DRIVING,
            })
            .then((response) => {
                directionsRenderer.setDirections(response);
                findLocationsWithinRadius(samplePlaces, response.routes[0].overview_path, 10);
            })
            .catch((e) => {
                loginMessage.textContent = "Directions request failed: " + e.message;
                loginMessage.classList.remove("hidden");
            });
    }

    function haversine(lat1, lon1, lat2, lon2) {
        const R = 6371;
        const toRad = (angle) => angle * (Math.PI / 180);

        const dLat = toRad(lat2 - lat1);
        const dLon = toRad(lon2 - lon1);
        const lat1Rad = toRad(lat1);
        const lat2Rad = toRad(lat2);

        const a = Math.sin(dLat / 2) ** 2 +
            Math.cos(lat1Rad) * Math.cos(lat2Rad) * Math.sin(dLon / 2) ** 2;
        const c = 2 * Math.asin(Math.sqrt(a));

        return R * c;
    }

    function findLocationsWithinRadius(samplePlaces, routePath, radius) {
        const locationsWithinRadius = [];

        samplePlaces.forEach((place) => {
            const { name, lat, long } = place;

            for (let i = 0; i < routePath.length; i++) {
                const routePoint = routePath[i];
                const distance = haversine(lat, long, routePoint.lat(), routePoint.lng());

                if (distance <= radius) {
                    placesList.innerHTML += `
                        <li>${name} | ${lat} | ${long} | ${distance.toFixed(2)} km</li>
                    `;

                    const pin = "{{ asset('images/pin.png') }}";

                    new google.maps.Marker({
                        map: map,
                        position: { lat: lat, lng: long },
                        icon: pin,
                        title: name
                    });

                    locationsWithinRadius.push({ name, lat, long, distance });
                    break;
                }
            }
        });

        return locationsWithinRadius;
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&libraries=places&callback=initMap" async defer></script>

<div class="p-4">
    <div id="currentLocationModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-lg max-w-md mx-auto mt-20">
            <h3 class="text-lg font-bold mb-4">Find Nearby Places</h3>
            <div id="modalMessage" class="hidden text-red-600 text-sm mb-4"></div>
            <input id="currentLocationInput" type="text" placeholder="Enter your current location" 
                class="p-3 border rounded-lg w-full mb-4">
            <div class="flex justify-end space-x-4">
                <button onclick="closeLocationModal()" id="closebtn" class="p-2 border rounded-lg">Skip</button>
                <button id="show_places_btn" onclick="showNearbyPlaces()" class="p-2 bg-blue-500 text-white rounded-lg">Show Places</button>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center space-x-4 mb-8">
        <input id="startLocation" type="text" placeholder="Enter your starting location"
            class="p-3 border rounded-lg w-64">
        <input id="endLocation" type="text" placeholder="Find and select your destination"
            class="p-3 border rounded-lg w-64">
        <button onclick="getDirection()" id="directionbutton" class="p-3 bg-blue-500 text-white rounded-lg">Get
            Directions</button>
    </div>

    <div class="flex items-start h-screen gap-8">
        <div id="googleMap" class="w-full h-full"></div>
        <div class="w-full overflow-y-auto h-full">
            <h2 class="text-xl font-bold mb-4">Places You Can Visit!</h2>
            <div id="places-list" class="space-y-4"></div>
        </div>
    </div>
</div>

<script>
    let directionsService;
    let directionsRenderer;
    let startAutocomplete;
    let endAutocomplete;
    let currentLocationAutocomplete;
    let map;
    let markers = [];

    const placesList = document.getElementById("places-list");
    const modalMessage = document.getElementById("modalMessage");

    // Simulate user authentication status
    const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
    const samplePlaces = @json($places);
    
    async function initMap() {
        const mapProp = {
            center: new google.maps.LatLng(6.905221589477516, 79.9133676248998),
            zoom: 10,
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        startAutocomplete = new google.maps.places.Autocomplete(document.getElementById("startLocation"), {
            componentRestrictions: { country: "LK" }
        });
        endAutocomplete = new google.maps.places.Autocomplete(document.getElementById("endLocation"), {
            componentRestrictions: { country: "LK" }
        });
        currentLocationAutocomplete = new google.maps.places.Autocomplete(document.getElementById("currentLocationInput"), {
            componentRestrictions: { country: "LK" }
        });

        document.getElementById("currentLocationModal").classList.remove("hidden");
    }

    function clearMarkers() {
        markers.forEach(marker => marker.setMap(null));
        markers = [];
    }

    function closeLocationModal() {
        document.getElementById("currentLocationModal").classList.add("hidden");
        modalMessage.classList.add("hidden");
    }

    function showModalMessage(message) {
        modalMessage.textContent = message;
        modalMessage.classList.remove("hidden");
    }

    function showNearbyPlaces() {
        if (!isLoggedIn) {
            showModalMessage("You need to log in first to use this feature.");
            return;
        }

        const place = currentLocationAutocomplete.getPlace();
        if (!place || !place.geometry) {
            showModalMessage("Please select a valid location.");
            return;
        }

        // Clear previous markers and directions
        clearMarkers();
        directionsRenderer.setMap(null);
        map.setCenter(place.geometry.location);
        map.setZoom(12);

        // Draw 20km radius circle
        const circle = new google.maps.Circle({
            map: map,
            center: place.geometry.location,
            radius: 20000,
            fillColor: '#FF000050',
            strokeColor: '#FF0000'
        });

        // Clear previous place cards
        placesList.innerHTML = '';

        // Find and display nearby places
        findLocationsWithinRadius(samplePlaces, [place.geometry.location], 20);
        closeLocationModal();
    }

    function getDirection() {
        if (!isLoggedIn) {
            showModalMessage("You need to log in first to use this feature.");
            return;
        }

        const startPlace = startAutocomplete.getPlace();
        const endPlace = endAutocomplete.getPlace();

        if (!startPlace || !endPlace || !startPlace.geometry || !endPlace.geometry) {
            showModalMessage("Please select valid starting and destination locations.");
            return;
        }

        clearMarkers();
        
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
                showModalMessage("Directions request failed: " + e.message);
            });
    }

    function haversine(lat1, lon1, lat2, lon2) {
        const R = 6371; // Earth's radius in kilometers
        const dLat = toRad(lat2 - lat1);
        const dLon = toRad(lon2 - lon1);
        const lat1Rad = toRad(lat1);
        const lat2Rad = toRad(lat2);

        const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1Rad) * Math.cos(lat2Rad) * 
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c;
    }

    function toRad(value) {
        return value * Math.PI / 180;
    }

    function findLocationsWithinRadius(places, routePath, radius) {
        // Clear existing content
        placesList.innerHTML = '';
        clearMarkers();

        const foundPlaces = new Set(); // To prevent duplicates

        places.forEach(place => {
            const { name, lat, long, photo, description } = place;

            for (let i = 0; i < routePath.length; i++) {
                const routePoint = routePath[i];
                const distance = haversine(
                    parseFloat(lat), 
                    parseFloat(long), 
                    routePoint.lat(), 
                    routePoint.lng()
                );

                if (distance <= radius && !foundPlaces.has(name)) {
                    foundPlaces.add(name);

                    // Create place card
                    const placeCard = document.createElement('div');
                    placeCard.className = 'bg-white rounded-lg shadow-md p-4';
                    placeCard.innerHTML = `
                        <div class="flex items-start gap-4">
                            <img src="storage/${photo}" alt="${name}" 
                                class="w-24 h-24 object-cover rounded-lg"/>
                            <div class="flex-1">
                                <h3 class="font-bold text-lg">${name}</h3>
                                <p class="text-gray-600 text-sm mb-2">${distance.toFixed(2)} km away</p>
                                ${description ? `<p class="text-gray-700 text-sm">${description}</p>` : ''}
                            </div>
                        </div>
                    `;
                    placesList.appendChild(placeCard);

                    // Add marker to map
                    const marker = new google.maps.Marker({
                        position: { lat: parseFloat(lat), lng: parseFloat(long) },
                        map: map,
                        title: name
                    });
                    markers.push(marker);

                    // Add click listener to marker
                    marker.addListener('click', () => {
                        const infoWindow = new google.maps.InfoWindow({
                            content: `
                                <div class="p-2">
                                    <h3 class="font-bold">${name}</h3>
                                    <p>${distance.toFixed(2)} km away</p>
                                </div>
                            `
                        });
                        infoWindow.open(map, marker);
                    });

                    break; // Break once we've found this place is within radius
                }
            }
        });

        if (foundPlaces.size === 0) {
            placesList.innerHTML = '<p class="text-gray-600 text-center p-4">No places found within the specified radius.</p>';
        }
    }
</script>

<script async
    src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&libraries=places&loading=async&callback=initMap">
</script>
<div>
    <div class="flex justify-center space-x-4 mb-8">
        <input id="startLocation" type="text" placeholder="Enter your starting location"
            class="p-3 border rounded-lg w-64">
        <input id="endLocation" type="text" placeholder="Find and select your destination"
            class="p-3 border rounded-lg w-64">
        <button onclick="getDirection()" class="p-3 bg-blue-500 text-white rounded-lg">Get Directions</button>
    </div>

    <div class="flex items-start h-screen gap-8">
        <div id="googleMap" class="w-full h-full"></div>

        <div class="w-full h-full">
            <h2>Additional Content</h2>
            <p>This is the space for additional content, such as descriptions, user inputs, or any other relevant
                information.</p>
        </div>
    </div>

    <script>
        let directionsService; // Declare outside to avoid scope issues
        let directionsRenderer;

        function initMap() {
            // Initialize map properties
            const mapProp = {
                center: new google.maps.LatLng(6.905221589477516, 79.9133676248998),
                zoom: 10,
            };
            const map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            // Initialize directions service and renderer after the map is created
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);
        }

        function getDirection() {
            // Validate user inputs
            const start = document.getElementById("startLocation").value;
            const end = document.getElementById("endLocation").value;

            if (!start || !end) {
                alert("Please enter both starting and destination locations.");
                return;
            }

            // Request directions
            directionsService
                .route({
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                    directionsRenderer.setDirections(response);
                })
                .catch((e) => {
                    alert("Directions request failed: " + e.message);
                });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&callback=initMap" async defer></script>
</div>

function initMap () {
    const geocoder = new google.maps.Geocoder();
    const infowindow = new google.maps.InfoWindow();
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 19.001733, lng: -98.201101},
        zoom: 15,
        mapId: 'f6325ac47accdc99',
        disableDefaultUI: true,
    });

    directionsRenderer.setMap(map);
    const onChangeHandler = function () {
        calculateAndDisplayRoute(directionsService, directionsRenderer);
    };
    document.getElementById("salida").addEventListener("change", onChangeHandler);
    document.getElementById("destino").addEventListener("change", onChangeHandler);
    infoWindow = new google.maps.InfoWindow();
    const locationButton = document.createElement("button");
    locationButton.textContent = "Usar ubicación actual";
    locationButton.classList.add("custom-map-control-button");
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
    locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };
                    console.log(pos);
                    document.getElementById("ayuda").value=pos.lat+","+pos.lng;
                    geocodeLatLng(geocoder, map, infowindow);
                    infoWindow.open(map);
                    map.setCenter(pos);
                    new google.maps.Marker({
                        position: pos,
                        map,
                        title: "Tu ubicación!",
                    });
                },
                () => {
                    handleLocationError(true, infoWindow, map.getCenter());
                }
            );
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });

}

function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    directionsService.route(
        {
            origin: {
                query: document.getElementById("salida").value,
            },
            destination: {
                query: document.getElementById("destino").value,
            },
            travelMode: google.maps.TravelMode.DRIVING,
        },
        (response, status) => {
            if (status === "OK") {
                directionsRenderer.setDirections(response);
            } else {
                window.alert("Directions request failed due to " + status);
            }
        }
    );
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

function geocodeLatLng(geocoder, map, infowindow) {
    const input = document.getElementById("ayuda").value;
    const latlngStr = input.split(",", 2);
    const latlng = {
        lat: parseFloat(latlngStr[0]),
        lng: parseFloat(latlngStr[1]),
    };
    geocoder.geocode({location: latlng}, (results, status) => {
        if (status === "OK") {
            if (results[0]) {
                map.setZoom(15);
                const marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                });
                document.getElementById("salida").value=results[0].formatted_address;
            } else {
                window.alert("No results found");
            }
        } else {
            window.alert("Geocoder failed due to: " + status);
        }
    });
}

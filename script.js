function searchBox() {
  var input = document.getElementById("search-box");
  var autocomplete = new google.maps.places.Autocomplete(input);
  google.maps.event.addListener(autocomplete, "place_changed", function () {
    var place = autocomplete.getPlace();
    var searchLat = place.geometry.location.lat();
    var searchLong = place.geometry.location.lng();
    console.log("Latitude: " + searchLat + ", Longitude: " + searchLong);

    // Prevent form submission when enter key is pressed
    input.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        event.preventDefault();
      }
    });

    var searchRadiusSelect = document.getElementById("radius-select");
    searchRadiusSelect.addEventListener("change", function (event) {
      var searchRadius = searchRadiusSelect.value;
      if (searchLat !== null && searchLong !== null && searchRadius !== null) {
        console.log("Search radius: " + searchRadius + ", Search latitude: " + searchLat + ", Search longitude: " + searchLong);
        getRoutes(searchLat, searchLong, searchRadius);
      }
    });
  });
}

window.onload = searchBox;


function getRoutes(searchLat, searchLong, searchRadius) {
  // Create the AJAX request object
  var xhr = new XMLHttpRequest();
  // Set up the AJAX request
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Parse the JSON data
      var routes = JSON.parse(xhr.responseText);
      loadMap(routes);
    }
  };
  console.log("Search radius: " + searchRadius);
  url = "get_data.php?searchLat=" + searchLat + "&searchLong=" + searchLong + "&searchRadius=" + searchRadius;
  // Send the AJAX request to the server
  xhr.open("GET", url);
  xhr.send();
}

function loadMap(routes) {
  // Create a new Google Map
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5,
    center: { lat: 51.5074, lng: -0.1278 },
  });

  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();

  directionsDisplay.setMap(map);

  var routeSelect = document.getElementById("route-select");

  //delete any existing options
  for (var i = routeSelect.options.length - 1; i >= 0; i--) {
    //dont remove the first option which is the select a radius option
    if (i != 0) {
      routeSelect.remove(i);
    }
  }

  // Loop through the routes and add them to the select dropdown
  for (var i = 0; i < routes.length; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.innerHTML = routes[i].id;
    routeSelect.appendChild(option);
  }

  // Handle form submission
  var routeForm = document.getElementById("location-form");
  routeForm.addEventListener("submit", function (event) {
    event.preventDefault();

    var selectedIndex = routeSelect.selectedIndex;
    var selectedRoute = routes[selectedIndex - 1];

    var start = new google.maps.LatLng(
      parseFloat(selectedRoute.start_lat),
      parseFloat(selectedRoute.start_long)
    );
    var end = new google.maps.LatLng(
      parseFloat(selectedRoute.end_lat),
      parseFloat(selectedRoute.end_long)
    );

    var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING,
    };

    directionsService.route(request, function (result, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(result);
      }
    });
  });
}

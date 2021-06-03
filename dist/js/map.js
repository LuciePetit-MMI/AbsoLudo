var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: {lat: 46.98159144885968, lng: 2.658557372052413},
    zoom: 5
  });

  // inside mapInit function
var markerGrandPlace = new google.maps.Marker({
    position: new google.maps.LatLng(50.846759, 4.352446),
    map: map,
    title: "Brussels Grand-Place"
  });

  // inside mapInit function
  google.maps.event.addListener(markerGrandPlace, "click", function() {
    map.panTo(this.getPosition());
    map.setZoom(20);
  });

  // inside mapInit function
var markerGrandPlace = new google.maps.Marker({
    position: new google.maps.LatLng(50.846759, 4.352446),
    map: map,
    title: "Brussels Grand-Place",
    icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
  });
}


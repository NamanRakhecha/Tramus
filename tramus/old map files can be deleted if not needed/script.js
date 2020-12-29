(function (window,trackster) {
   var options=trackster.map_options,
   directionsDisplay,
   directionsService = new google.maps.DirectionsService(),
 
   element=document.getElementById("map"),
 
 map = Trackster.create(element,options);
// direction = Direction.create();
 var marker=map.addMarker({
  lat:15.2876888,
  lng:73.95602689999998,
  content:'<h1>KTC Bus Stand</h1><a href="bus-stops.php?txt-bus-stop-name=KTC">view bus stops</a> ',
  icon:'bus-stand.png',
 });
  var marker2=map.addMarker({
    id:2,
  lat:15.2611902,
  lng:74.1065992,
  content:'<h1>Savordem Bus Stand</h1><a href="bus-stops.php?txt-bus-stop-name=Savordem">view bus stops</a>',
  icon:'bus-stand.png',
 });
   var marker3=map.addMarker({
  lat:15.2767904,
  lng:73.91468750000001,
  content:'<h1>Colva BUS STAND</h1><a href="bus-stops.php?txt-bus-stop-name=Colva">view bus stops</a>',
  icon:'bus-stand.png',
 });
   var found = map.findBy(function(marker){
    return marker.id===2;
   });
   console.log(found);
   console.log(map.markers);
   
 
   //map.removeBy(function(marker){
   //return marker.id===2;
   //});
calcRoute();
     function calcRoute() {

    var start = new google.maps.LatLng(15.2876888, 73.95602689999998);
    //var end = new google.maps.LatLng(38.334818, -181.884886);
    var end = new google.maps.LatLng(15.2767904, 73.91468750000001);
    var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        directionsDisplay.setMap(map);
      } else {
        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
      }
    });
  }

   console.log(map.markers);
//console.log(map.markers);
//map._removeMarker(marker2);
//console.log(map.markers);

 


})(window,window.trackster || (window.trackster={}));


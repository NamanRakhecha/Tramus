<?php 
if(!isset($_POST['sourceName']) or !isset($_POST['DestinationName']) or !isset($_POST['via'])){
  echo "
<html>
 <head>
    <style>
       #map {
        height:100vh;
        width: 100%;
        
       }
    </style>
  </head>
<body style='margin: 0;padding: 0;'>
<div id='map'></div>
 <script 
   src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCD_xCPt_BnPaqrCZzah7NJp3J30wLkoy0&callback=initMap'>
    </script>
<script>

  
    var mapOptions = {
        center: new google.maps.LatLng(15.288573, 73.955165),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

</script>

</body>
</html>



  ";
}else{

  if($_POST['markers']==1){






$src=$_POST['sourceName'];
$des=$_POST['DestinationName'];
$via=$_POST['via'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height:100vh;
        width: 100%;
        
       }
    </style>
  </head>
  <body style="margin: 0;padding: 0;">
   
    <div id="map"></div>
   
    <script 
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD_xCPt_BnPaqrCZzah7NJp3J30wLkoy0&callback=initMap">
    </script>
    <script type='text/javascript'>
  var geocoder;
var map;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
    <?php require('connect.php'); 
 require('connect.php'); 
$sql="select stops.id, stops.stop_name, stops.latitude,stops.longitude from stops stops join stops_orders on stops.id=stops_orders.stop_id join routes on stops_orders.route_id=routes.id where (source='$des' and destination='$src') or (source='$src' and destination='$des') and via='$via'";

$res=mysqli_query($conn,$sql)
or die('Query failed toooo execute'.mysql_error());
    ?>
    var locations = [
<?php
while($row=mysqli_fetch_array($res)){
echo "
  ['",$row['stop_name'],"',  ",$row['latitude'],", ",$row['longitude'],",",$row['id'],"],
  ";
}
echo "];";
?>
function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: new google.maps.LatLng(15.272045, 73.966982),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  directionsDisplay.setMap(map);
  directionsDisplay.setOptions( { suppressMarkers: true } );
  var infowindow = new google.maps.InfoWindow();
  var marker, i;
  var request = {
    travelMode: google.maps.TravelMode.DRIVING
  };
  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
     

    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]); 
        infowindow.open(map, marker);
      }
    })(marker, i));
    if (i == 0) request.origin = marker.getPosition();
    else if (i == locations.length - 1) request.destination = marker.getPosition();
    else {
      if (!request.waypoints) request.waypoints = [];
      request.waypoints.push({
        location: marker.getPosition(),
        stopover: false
      });
    }
  }
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    </body>
</html>
<?php }else{


$src=$_POST['sourceName'];
$des=$_POST['DestinationName'];
$via=$_POST['via'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height:100vh;
        width: 100%;
        
       }
    </style>
  </head>
  <body style="margin: 0;padding: 0;">
   
    <div id="map"></div>
   
    <script 
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD_xCPt_BnPaqrCZzah7NJp3J30wLkoy0&callback=initMap">
    </script>
    <script type='text/javascript'>
  var geocoder;
var map;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
    <?php require('connect.php'); 
 require('connect.php'); 
$sql="select stops.id, stops.stop_name, stops.latitude,stops.longitude from stops stops join stops_orders on stops.id=stops_orders.stop_id join routes on stops_orders.route_id=routes.id where (source='$des' and destination='$src') or (source='$src' and destination='$des') and via='$via'";
$res=mysqli_query($conn,$sql)
or die('Query failed to execute'.mysql_error());
    ?>
    var locations = [
<?php
while($row=mysqli_fetch_array($res)){
echo "
  ['",$row['stop_name'],"',  ",$row['latitude'],", ",$row['longitude'],",",$row['id'],"],
  ";
}
echo "];";
?>
var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(15.272045, 73.966982),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon:'bus-stand.png'
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          var stn=locations[i][0].replace(/ /g,"_");
          infowindow.setContent("<h4>Stop Name:<h2>"+locations[i][0]+"</h2<h4><br>For Detailed View:<a href=bus-stops.php?txt-bus-stop-name="+stn+" target='_parent'>click here</a></h4>");
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>
    </body>
</html>

<?php 

} } ?>
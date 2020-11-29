<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <style> #userlocation{
       margin-top: 40px;
       margin-left:100px;
       height:500px;
       width:1000px;
   } 
   h3{
       text-align:center;
       color:red;
   }

   </style>
   <link rel="stylesheet" href="../css/stylemap.css">
</head>
<body>
    <h3>Your Current Location !!!</h3>

    <?php
    $ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
    
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success') {
        $country= $query['country'];
        $latitude= $query['lat'];
        $longitude= $query['lon'];
    echo '<h4> Hello our visitor. You are currently accessing this website from ' .$query['org'].', ' .$query['city'].', '.$query['country'].'! </h4>
    Country: ' .$query['country']. '<br> City: '.$query['city']. '<br> Postal code: '.$query['zip'].'<br> Latitude: '.$query['lat'].'<br> Longitude: '.$query['lon']. '!';
    } else {
    echo 'Unable to get location';
    }
    ?>
    <div id ="userlocation"></div>
    <script>
      
         const mymap = L.map('userlocation').setView([0, 0],1);
      const attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';

      const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      const tiles = L.tileLayer(tileUrl, { attribution });
      tiles.addTo(mymap);
      
      // Making a marker with a custom icon
      
      const marker = L.marker([27.2, 89.5], { 
        title: "This is hover text for marker",
        
         }).addTo(mymap)
         .bindPopup('<?php echo '<h4> IP ADDRESS: </h4>' .$query['query']. ''?>')
         .openPopup();

      var latitude = <?php echo $latitude ?>; 
      var longitude = <?php echo $longitude ?>;
      marker.setLatLng([latitude, longitude]);
    </script>
    <br><br><br>
    <a href="../index.php">Main Page</a>
</body>
</html>
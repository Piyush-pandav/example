<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL7oEgpWBVGaz0E_vgta63OSe3EK4jJ6k" 
          type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 1000px; height: 400px;"></div>

  <script type="text/javascript">

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(27.774999618530273,-97.4031982421875),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker, i;
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(27.774999618530273,-97.4031982421875),
        map: map
      });
  </script>
</body>
</html>
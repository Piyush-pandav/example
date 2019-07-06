
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>How to Draw Route Line Between Markers using Google Maps V3</title>
</head>
<body>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBJtBnzrC5b1D1wI5WKgE_49Dzs1Zzd7kY&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
    <script type="text/javascript">
        var markers = [
            {
                "title": 'Lahore',
                "lat": '21.224742',
                "lng": '72.803307',
                
            }
        ,
            {
                "title": 'Karachi',
                "lat": '21.250342',
                "lng": '72.822189',
 
            }
        ,
            {
                "title": 'Islamabad',
                "lat": '21.203618',
                "lng": '72.888451',
            }
		,
			{
				"title": 'Islamabad',
                "lat": '21.170966',
                "lng": '72.840042',
			}
];

        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            var infoWindow = new google.maps.InfoWindow();
            var lat_lng = new Array();
            var latlngbounds = new google.maps.LatLngBounds();
            for (i = 0; i < markers.length; i++) {
                var data = markers[i]
                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                lat_lng.push(myLatlng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.title
                });
                latlngbounds.extend(marker.position);
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent(data.description);
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
            map.setCenter(latlngbounds.getCenter());
            map.fitBounds(latlngbounds);
 
            //***********ROUTING****************//
 
            //Intialize the Path Array
            var path = new google.maps.MVCArray();
 
            //Intialize the Direction Service
            var service = new google.maps.DirectionsService();
 
            //Set the Path Stroke Color
            var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });
 
            //Loop and Draw Path Route between the Points on MAP
            for (var i = 0; i < lat_lng.length; i++) {
                if ((i + 1) < lat_lng.length) {
                    var src = lat_lng[i];
                    var des = lat_lng[i + 1];
                    path.push(src);
                    poly.setPath(path);
                    service.route({
                        origin: src,
                        destination: des,
                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                    }, function (result, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                                path.push(result.routes[0].overview_path[i]);
                            }
                        }
                    });
                }
            }
        }
    </script>
    <div id="dvMap" style="width: 500px; height: 500px">
    </div>
</body>
</html>
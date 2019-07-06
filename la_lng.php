<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Google Maps Api Get Current Location Latitude and Longitude</title>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBJtBnzrC5b1D1wI5WKgE_49Dzs1Zzd7kY&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<button id="find_btn">Find Me</button>
<div id="result"></div>
</body>
<script type="text/javascript">
$(document).ready(function(e) {
    alert('fsfs');
});
$("#find_btn").click(function () {
	 //user clicks button
    if ("geolocation" in navigator){ //check geolocation available 
        //try to get user current location using getCurrentPosition() method
        navigator.geolocation.getCurrentPosition(function(position){ 
                $("#result").html("Found your location <br />Lat : "+position.coords.latitude+" </br>Lang :"+ position.coords.longitude);
            });
    }else{
        console.log("Browser doesn't support geolocation!");
    }
});
</script>
</html>


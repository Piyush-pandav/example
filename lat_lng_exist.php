<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>
     <script type="text/javascript"
src="http://maps.google.com/maps/api/js?key=AIzaSyBJtBnzrC5b1D1wI5WKgE_49Dzs1Zzd7kY&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing">
</script>

<script type="text/javascript">
function distance(lat1,lon1,lat2,lon2){
	alert('dddfdf');
  var R = 6371; // Earth's radius in Km
  return Math.acos(Math.sin(lat1)*Math.sin(lat2) + 
                  Math.cos(lat1)*Math.cos(lat2) *
                  Math.cos(lon2-lon1)) * R;
}


if (distance(user.lat, user.lon, post.lat, post.lon) <= desiredRadiusInKm){
  // return true;
} else {
  // return false;
}

function arePointsNear(point1, point2) {
    var sw = new google.maps.LatLng(point2.lat() - 0.005, point2.lng() - 0.005);
    var ne = new google.maps.LatLng(point2.lat() + 0.005, point2.lng() + 0.005);
    var bounds = new google.maps.LatLngBounds(sw, ne);
    if (bounds.contains (point1))
    	return true;


    return false;
}
</script>
<body>
<input type="submit" name="btnsubmit" onclick="arePointsNear('21.170146','72.835042')" />
</body> 
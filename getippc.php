<html>
<head>
</head>
<body>
	<form method="post">
    	<input type="submit" name="btnsubmit" onclick="get_client_ip()" />
    </form>
</body>
<script>
function get_client_ip() {
	alert('dad')
    $ipaddress = '203.109.83.238';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    //return $ipaddress;
	alert($ipaddress);
}
</script>
<?php
echo $ip = getenv("HTTP_CLIENT_IP");
?>
</html>

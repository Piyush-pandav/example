<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","example");
if(isset($_GET['sid']))
{
	$delete=mysqli_query($conn,"delete from firstexample where id=$_GET[sid]");
	header('location:view.php');
}
?>
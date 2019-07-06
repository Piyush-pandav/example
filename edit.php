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


$select=mysqli_query($conn,"select * from firstexample where id=$_GET[sid]");
$frecord=mysqli_fetch_array($select);


?>

<form method="post">
	<center>
		<h1>Registration</h1>
    	<table>
        	<tr>
            	<td>Name :</td>
                <td><input type="text" name="txtname"  value=" <?php echo "$frecord[1]" ?>"  /></td>
            </tr>
            <tr>
            	<td>Address :</td>
                <td><input type="text" name="txtaddress" value=" <?php echo "$frecord[2]" ?>" /></td>
            </tr>
            <tr>
            	
                <td><input type="submit" name="btnupdate" value="update"></td>
               
            </tr>
            
	    </table>
    </center>
</form>

<?php

if(isset($_POST['btnupdate']))
{
	
	$name=$_POST['txtname'];
	$address=$_POST['txtaddress'];
	
	
	$update=mysqli_query($conn,"update firstexample set Name='$name',Address='$address' where id=$_GET[sid] ");
	
	if($update > 0)
	{
			
			header('location:view.php');
	}
	else
	{
					
					header('location:view.php');
	}
	
}
?>
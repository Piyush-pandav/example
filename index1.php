<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>First Example</title>
</head>

<body>
<center>
<div style="height:80%; width:50%; border-style:ridge; background-color:#FF8040;">
<form method="post">
	<center>
		<h1>Registration</h1>
    	<table>
        	<tr>
            	<td>Name :</td>
                <td ><input style="background-color:#DDD;height:35px; width:100%; border-radius:3px 5px 5px 3px;" type="text" name="txtname"  /></td>
            </tr>
            <tr>
            	<td>Address :</td>
                <td><input style="background-color:#DDD;height:35px; width:100%; border-radius:3px 5px 5px 3px;" type="text" name="txtaddress" /></td>
            </tr>
            <hr />
            <tr>
            	
                <td><input style="background-color:#DDD;height:35px; width:100%; border-radius:3px 5px 5px 3px;"  type="submit" name="btnsubmit" value="Insert"></td>
                <td><a style="background-color:#DDD;height:120px; width:100%; text-decoration:none; border-radius:3px 5px 5px 3px;"  href='view.php'>View</a></td>
            </tr>
            
	    </table>
    </center>
</form>
</div>
</center>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","example");
	
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$address=$_POST['txtaddress'];
	
	$ins_query=mysqli_query($conn,"insert into firstexample values(0,'$name','$address')");
	
	if($ins_query > 0)
	{
			echo "Successfully inserted..!!";
	}
	else
	{
		echo "not inserted..!!";
	}
}




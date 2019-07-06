<!DOCTYPE html>  
<?php
include_once './config.php';

if(isset($_POST['submit']))
{
	$mobile=$_POST['mobie'];
	echo "<b>Your Mobile Number is :</b>".$mobile."<hr>";
}
?>
<html lang="en">  
<form name="form1" action="#" method="post">  



<input type="text" maxlength="10"  name="mobie" autocomplete="off"/>
    
<input type="submit" name="submit" value="SUBMIT">

</form>  
</html>  



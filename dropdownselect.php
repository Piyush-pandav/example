<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form name="form_update" method="post" action="update_test.php">
<?php
$con=mysqli_connect("localhost","root","","ismat_db");
//============== check connection
if(mysqli_errno($con))
{
    echo "Can't Connect to mySQL:".mysqli_connect_error();
}
else
{
    echo "Connected to mySQL</br>";
}
//=============================
//This creates the drop down box
echo "<select name= 'FirstName'>";
echo '<option value="">'.'--- Please Select Person ---'.'</option>';
//$query=mysqli_query($con,"SELECT id,FirstName FROM persons");
$query = mysqli_query($con,"SELECT FirstName FROM persons");
$query_display = mysqli_query($con,"SELECT * FROM persons");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['id']."'>".$row['FirstName']
 .'</option>';
}
echo '</select>';
?> <input type="submit" name="submit" value="Submit"/>
</form>
<br/><br/>
<a href="main.html"> Go back to Main Page </a>
</body>
</html>
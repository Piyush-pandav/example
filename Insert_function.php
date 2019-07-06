<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "test";
error_reporting(0);
$connect = mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db,$connect);
?>
<html>
<head>
<title>Insert Function</title>
</head>
<body>
<form method="post" name="insert_form" >
  <table>
    <tr>
      <td>Name</td>
      <td><input type="text" name="txtname" id="txtname" autocomplete="off" required></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="txtaddress" id="txtaddress" autocomplete="off" required></td>
    </tr>
    <tr>
      <td>Mobile number</td>
      <td><input type="text" name="txtnumber" id="txtnumber" maxlength="10" required autocomplete="off"></td>
    </tr>
    <tr>
      <td>Occuption</td>
      <td><input type="text" name="txtoccuption" id="txtoccuption" autocomplete="off" required></td>
    </tr>
    <tr>
      <td>Extra Notes :</td>
      <td><input type="text" name="txtnotes" id="txtnotes" autocomplete="off" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn_insert" id="btn_insert" value="Insert"></td>
    </tr>
  </table>
</form>
<table  >
  <thead style="padding:14px 18px 14px 18px;">
  <th>Name</th>
    <th>Address</th>
    <th>Number</th>
    <th>Occuption</th>
    <th>Notes</th>
      </thead>
  <tbody>
    <?php
	$getall=mysql_query("select * from tbl_example");
	while($row=mysql_fetch_array($getall))
	{
		?>
            <tr>
              <td><?php echo $row['Name']?></td>
              <td><?php echo $row['Address']?></td>
              <td><?php echo $row['MoblieNumber']?></td>
              <td><?php echo $row['Occuption']?></td>
              <td><?php echo $row['Notes']?></td>
            </tr>
       <?php
	}
	?>
  </tbody>
</table>
</body>
</html>
<?php
if(isset($_POST['btn_insert']))
{
      $data = array('Name' => $_POST['txtname'],
                    'Address' => $_POST['txtaddress'],
                    'MoblieNumber' => $_POST['txtnumber'],
                    'Occuption' =>$_POST['txtoccuption'],
					'Notes' =>$_POST['txtnotes'],);
      $table="tbl_example";
      insertData($table,$data);
}
function insertData($table,$data)
{
	$keys   = "`" . implode("`, `", array_keys($data)) . "`";
    $values = "'" . implode("', '", $data) . "'";
    $insert_data=mysql_query("INSERT INTO `{$table}` ({$keys}) VALUES ({$values})");
	if(isset($insert_data))
	{
		?>
         <script>
			alert("Successfully inserted !");
			window.location('Insert_function.php');
		</script>
         <?php
	}
}
?>

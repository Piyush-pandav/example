<?php
include_once './config.php';
?>
<table>
<td>type</td>
    <td>name</td>
    <td>date</td>
    <td>time</td>
    <td>n1</td>
    <td>n2</td>
    <td>n3</td>
</table>
<marquee direction="up" style="height:98px"  scrolldelay="150" scrollamount="3">
<table>

<?php
$selectquerry=mysql_query("SELECT `lt_bet_type_id`, `lt_bet_name`, `lt_bet_datetime`, `lt_time_id`, `lt_bet_number_1`, `lt_bet_number_2`, `lt_bet_number_3` FROM `lottery_bet`  limit 0,5");
while($row=mysql_fetch_array($selectquerry))
{	

	echo "<tr style='background-color:red'>";
		echo "<td>$row[lt_bet_type_id]</td>";
		echo "<td>$row[lt_bet_name]</td>";
		echo "<td>$row[lt_bet_datetime]</td>";
		echo "<td>$row[lt_time_id]</td>";
		echo "<td>$row[lt_bet_number_1]</td>";
		echo "<td>$row[lt_bet_number_2]</td>";
		echo "<td>$row[lt_bet_number_3]</td>";
	echo "</tr>";
}
?>
</table>
</marquee>


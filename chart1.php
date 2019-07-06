<?php
 $con = mysqli_connect('localhost','root','','lottery');
 include_once './config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Create Google Charts
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['time', 'Coordinator',],
 <?php 
 $current_dates = date('Y-m-d');
$query = "select ifnull(`lt_sales_create_date`,0) as date,ifnull(SUM(`lt_bet_amount`),0) as sum from `lottery_sale`
where `lt_sales_create_date`='2017-05-10'";
 $exec = mysql_query($query);


	if(mysql_num_rows($exec)>0)
	{
		
	while($row = mysql_fetch_array($exec))
 		{
 		echo "['".$row['date']."',".$row['sum'].",],";
 		}
	}
	else
	{
		echo "0";
	}
	
 ?>
 
 ]);

 var options = {
 title: 'Bet'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);
 }
 </script>
 
 <!--____________________________________________________________________________________________________________________________________________ -->
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Number', 'coordinator',],
 <?php 

 $query = "SELECT sum(`Total_amount`-(`Agent_salary`-`Coordinator_salary`)) as NET ,`lottery_employee`.`lt_employee_first_name` as name,`lottery_employee`.`lt_employee_address` as address
FROM `lottery_manual_devide_salary`
join `lottery_employee`
on `lottery_manual_devide_salary`.`lt_Coordinator_emp_id` =`lottery_employee`.`lt_employee_id`
WHERE DATE_FORMAT(`lt_create_date_time`,'%Y-%m-%d') ='2017-05-12' group by `lottery_manual_devide_salary`.`lt_Coordinator_emp_id`";

 $exec = mysql_query($query);
 
 if(mysql_num_rows($exec)>0)
 {
 while($row = mysql_fetch_array($exec))
 {
	
 echo "['".$row['name']."',".$row['NET'].",],";
 }
 }
 else
 {
	 echo "0";
 }
 ?>
 
 ]);

 var options = {
 title: 'Bet'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("vsvsvs"));
 chart.draw(data, options);
 }
 </script>
 
 
 
 
 
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['time', 'Coordinator','Win','commissiom',],
 <?php 
 $current_dates = date('Y-m-d');
/* $query = "select 
 sum(`lottery_sale`.`it_win_amount`) as sum,sum(`lottery_sale`.`lt_bet_amount`) as win,`lottery_time_bet`.`lt_time` as time
    
from `lottery_sale`
join `lottery_time_bet`
on `lottery_sale`.`lt_time_id`=`lottery_time_bet`.`lt_time_id`

where `lt_sales_create_date`='2017-05-11' and `lottery_sale`.`it_win_amount`>
0
group by `lt_bet_id`";*/



$query ="select
sum(`lottery_sale`.`it_win_amount`) as sum,
sum(`lottery_manual_devide_salary`.`remain_amount`) as net_profit,
sum(`lottery_manual_devide_salary`.`Total_amount`-`lottery_manual_devide_salary`.`remain_amount`) as Final_commission,
`lottery_time_bet`.`lt_time` as time
from `lottery_sale` 
join `lottery_time_bet`
on `lottery_sale`.`lt_time_id`=`lottery_time_bet`.`lt_time_id`
join `lottery_manual_devide_salary`
on `lottery_manual_devide_salary`.`lt_sale_id`=`lottery_sale`.`lt_sale_id`

where `lottery_sale`.`lt_sales_create_date`='2017-05-11'  group by `lottery_sale`.`lt_bet_id`";
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec))
 {
	
 echo "['".$row['time']."',".$row['sum'].",".$row['net_profit'].",".$row['Final_commission'].",],";
 }
 ?>
 
 ]);

 var options = {
 title: 'Bet'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart1"));
 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h3>Column Chart</h3>
 <div id="columnchart" style="width: 900px; height: 500px;"></div>
 <br>
 <div id="columnchart1" style="width: 900px; height: 500px;"></div>
 <br>
 <div id="vsvsvs"  style="width: 900px; height: 500px;"></div>
</body>
</html>

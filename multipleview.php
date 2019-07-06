<html>
<head>
<title>Google Charts Tutorial</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load('current', {packages: ['corechart']});     
   </script>
</head>
<body>
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
function drawChart() {
 
 
 <?php 
 $query = "select `lt_sales_create_date` as date,SUM(`lt_bet_amount`) as sum,sum(`it_win_amount`) as win  from `lottery_sale`
where `lt_sales_create_date`='2017-05-11'";

 $exec = mysql_query($query);
 while($row = mysql_fetch_array($exec))
 {
	$address=$row['sum'];
 echo "['".$row['date']."',".$row['sum'].",".$row['win'].",'Sale :$address','#337ab7'],";
 }


 ?>
   var data = google.visualization.arrayToDataTable([
      
	  
	  ['Number', 'Coordinator','ccscscsc']
      ]);

   var options = {
      title: 'Population (in millions)',
      isStacked:true	  
   };  

   // Instantiate and draw the chart.
   var chart = new google.visualization.BarChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>
</body>
</html>
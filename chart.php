 <?php 
error_reporting(0);
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "lottery";


date_default_timezone_set('Asia/Calcutta');
$current_date = date('Y-m-d H:i:s');
$current_dates = date('Y-m-d');
$connect = mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());

mysql_select_db($db,$connect) or die(mysql_error());

	$selectQuery="select `lt_bet_amount` as '2017-05-11' from `lottery_sale` where `lt_sales_create_date`='2017-05-11'";
	
    $r= mysql_query($selectQuery) or die(mysql_error()); 
    $transactions = array();
    while($result  = mysql_fetch_array($r, MYSQL_ASSOC)){
      $transactions[] = $result;
    } 
    $rows = array();
      $flag = true;
      $table = array();
      $table['cols'] = array(
    array('label' => 'Transaction Date', 'type' => 'string'),
    array('label' => 'Bet Amount', 'type' => 'number'),
    
    
    );
  $rows = array();
  foreach($transactions as $tr) {
    $temp = array();
     foreach($tr as $key=>$value)
	 {
    $temp[] = array('v' => (string) $key); 
    $temp[] = array('v' => (int) $value);   
	
	 
    }
  $rows[] = array('c' => $temp); 
}
    $table['rows'] = $rows;
    $jsonTable = json_encode($table);
?>
<html>
    <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    
    
    <script type="text/javascript">
    google.load('visualization', '1', {'packages':['corechart']});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
          var options = {
          title: 'Sales Performance',
          is3D: 'true',
          width: 1100,
          height: 400
        };
		
		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
   chart.draw(data, options);
   
   
   google.charts.setOnLoadCallback(drawChart);
   

    }
    </script>
  </head>
  <body>
       <div id="chart_div" ></div>
       
       
      
	   
	  
  </body>
</html>
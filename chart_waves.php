<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>


</body>
<script>

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 10 },
			{ y: 20},
			{ y: 30, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 40 },
			{ y: 50 },
			{ y: 60 },
			{ y: 20 },
			{ y: 20 },
			{ y: 40 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 5 },
			{ y: 10 },
			{ y: 20 }
		]
	}]
});
chart.render();

}

</script>
</html>
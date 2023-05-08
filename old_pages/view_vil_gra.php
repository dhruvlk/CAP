<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		// text: "Water Tax"
	},	
	axisY: {
		title: "Receiveables",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Collected",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Receiveables",
		legendText: "Receiveables",
		showInLegend: true, 
		dataPoints:[
			{ label: "Dindori", y: 748350 },
			{ label: "Jalgaon", y: 683630 },
			{ label: "Nandgaon", y: 374755 },
			{ label: "Dhakambe", y: 646379 },
			{ label: "M.bad", y: 343246 },
			{ label: "Matori", y: 221002 },
			{ label: "Mungsara", y: 551369 },
			{ label: "Mokhada", y: 439063 }
		]
	},
	{
		type: "column",	
		name: "Collected",
		legendText: "Collected",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "Dindori", y: 639794 },
			{ label: "Jalgaon", y: 301476 },
			{ label: "Nandgaon", y: 281462 },
			{ label: "Dhakambe", y: 493795 },
			{ label: "M.bad", y: 184005 },
			{ label: "Matori", y: 108291 },
			{ label: "Mungsara", y: 448921 },
			{ label: "Mokhada", y: 259841 }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<center>
<div id="chartContainer" style="height: 300px; width: 80%;"></div>
</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
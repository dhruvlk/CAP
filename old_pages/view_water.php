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
	// data: [{
	// 	type: "column",
	// 	name: "Receiveables",
	// 	legendText: "Receiveables",
	// 	showInLegend: true, 
	// 	dataPoints:[
	// 		{ label: "Palghar", y: 54835069 },
	// 		{ label: "Dahanu", y: 6836320 },
	// 		{ label: "Vasai", y: 3747553 },
	// 		{ label: "Talasari", y: 2463796 },
	// 		{ label: "Wada", y: 3432469 },
	// 		{ label: "Vikramgad", y: 2210022 },
	// 		{ label: "Javhar", y: 2513697 },
	// 		{ label: "Mokhada", y: 1390630 }
	// 	]
	// },
	data: [{
		type: "column",
		name: "Receiveables",
		legendText: "Receiveables",
		showInLegend: true, 
		dataPoints:[
			{ label: "Palghar", y: 748350 },
			{ label: "Dahanu", y: 683630 },
			{ label: "Vasai", y: 374755 },
			{ label: "Talasari", y: 646379 },
			{ label: "Wada", y: 343246 },
			{ label: "Vikramgad", y: 221002 },
			{ label: "Javhar", y: 551369 },
			{ label: "Mokhada", y: 439063 }
		]
	},
	{
	// 	type: "column",	
	// 	name: "Collected",
	// 	legendText: "Collected",
	// 	axisYType: "secondary",
	// 	showInLegend: true,
	// 	dataPoints:[
	// 		{ label: "Palghar", y: 33979422 },
	// 		{ label: "Dahanu", y: 3014765 },
	// 		{ label: "Vasai", y: 1814629 },
	// 		{ label: "Talasari", y: 937952 },
	// 		{ label: "Wada", y: 1840059 },
	// 		{ label: "Vikramgad", y: 1082910 },
	// 		{ label: "Javhar", y: 948926 },
	// 		{ label: "Mokhada", y: 759844 }
	// 	]
	// }]
		type: "column",	
		name: "Collected",
		legendText: "Collected",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "Palghar", y: 639794 },
			{ label: "Dahanu", y: 301476 },
			{ label: "Vasai", y: 281462 },
			{ label: "Talasari", y: 493795 },
			{ label: "Wada", y: 184005 },
			{ label: "Vikramgad", y: 108291 },
			{ label: "Javhar", y: 448921 },
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
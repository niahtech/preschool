// 'use strict';

// $(document).ready(function() {

// 	// Area chart
	
// 	if ($('#apexcharts-area').length > 0) {
// 	var options = {
// 		chart: {
// 			height: 350,
// 			type: "area",
// 			toolbar: {
// 				show: false
// 			},
// 		},
// 		dataLabels: {
// 			enabled: false
// 		},
// 		stroke: {
// 			curve: "smooth"
// 		},
// 		series: [{
// 			name: "Students",
// 			color: '#FFBC53',
// 			data: [24, 48, 56, 32, 34, 52, 25]
// 		}],
// 		xaxis: {
// 			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
// 		}
// 	}
// 	var chart = new ApexCharts(
// 		document.querySelector("#apexcharts-area"),
// 		options
// 	);
// 	chart.render();
// 	}
// });
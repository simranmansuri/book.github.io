// Data Chart
var data1 = {
			labels:["M","T","W","R","F","S","S"],
			datasets:[{
				label:'apples',
				data:[12,19,3,17,28,24,10],
				backgroundColor:["#395484","#257586","#257586","#257586","#257586","#257586","#257586"]
			},{
				label:'oranges',
				data:[30,29,10,15,12,15,10]
		}]
	};


//Bar chart
var ctx = document.getElementById("chartjs-bar").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'bar',
		data:data1,
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation Bar Chart'
				}
			},
			
	});

// Line Chart
var ctx = document.getElementById("chartjs-line").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'line',
		data: data1,
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation Line Chart'
				}
			}
	});

// Pie Chart
var ctx = document.getElementById("chartjs-pie").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'pie',
		data: data1,
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation pie Chart'
				}
			}
	});	

// Doughnut Chart
var ctx = document.getElementById("chartjs-doughnut").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'doughnut',
		data: data1,
			options:{
				CutoutPercentage:10,
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation doughnut Chart'
				}
			}
	});		

//Bubble Chart Js
	var ctx = document.getElementById("chartjs-bubble").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'bubble',
		  data: {
      labels: "Africa",
      datasets: [
        {
          label: ["China"],
          backgroundColor: "rgba(255,221,50,0.2)",
          borderColor: "rgba(255,221,50,1)",
          data: [{
            x: 21269017,
            y: 5.245,
            r: 15
          }]
        }, {
          label: ["Denmark"],
          backgroundColor: "rgba(60,186,159,0.2)",
          borderColor: "rgba(60,186,159,1)",
          data: [{
            x: 258702,
            y: 7.526,
            r: 10
          }]
        }, {
          label: ["Germany"],
          backgroundColor: "rgba(0,0,0,0.2)",
          borderColor: "#000",
          data: [{
            x: 3979083,
            y: 6.994,
            r: 15
          }]
        }, {
          label: ["Japan"],
          backgroundColor: "rgba(193,46,12,0.2)",
          borderColor: "rgba(193,46,12,1)",
          data: [{
            x: 4931877,
            y: 5.921,
            r: 15
          }]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }, scales: {
        yAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Happiness"
          }
        }],
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "GDP (PPP)"
          }
        }]
      }
    },
});	


// Radar Chart 
 var ctx = document.getElementById("chartjs-radar").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'radar',
		data: data1,
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation radar Chart'
				}
			}
	});	

// Polar Chart 
 var ctx = document.getElementById("chartjs-polar").getContext('2d');
	var myChart = new Chart(ctx,{
		type : 'polarArea',
		data: data1,
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:'Day Calculation Polar Chart'
				}
			}
	});		


// Scatter Chart

 var ctx = document.getElementById("chartjs-scatter").getContext('2d');
	var myChart = new Chart(ctx,{
					type : 'scatter',
					data: {
			        datasets: [{
			            label: 'Scatter Dataset',
			            backgroundColor: '#f00',
			            data:  [{
				x: 1,
				y: -1.711e-2,
			}, {
				x: 1.26,
				y: -2.708e-2,
			}, {
				x: 1.58,
				y: -4.285e-2,
			}, {
				x: 2.0,
				y: -6.772e-2,
			}, {
				x: 2.51,
				y: -1.068e-1,
			}, {
				x: 3.16,
				y: -1.681e-1,
			}, {
				x: 3.98,
				y: -2.635e-1,
			}, {
				x: 5.01,
				y: -4.106e-1,
			}, {
				x: 6.31,
				y: -6.339e-1,
			}, {
				x: 7.94,
				y: -9.659e-1,
			}, {
				x: 10.00,
				y: -1.445,
			}, {
				x: 12.6,
				y: -2.110,
			}, {
				x: 15.8,
				y: -2.992,
			}, {
				x: 20.0,
				y: -4.102,
			}, {
				x: 25.1,
				y: -5.429,
			}, {
				x: 31.6,
				y: -6.944,
			}, {
				x: 39.8,
				y: -8.607,
			}, {
				x: 50.1,
				y: -1.038e1,
			}, {
				x: 63.1,
				y: -1.223e1,
			}, {
				x: 79.4,
				y: -1.413e1,
			}, {
				x: 100.00,
				y: -1.607e1,
			}, {
				x: 126,
				y: -1.803e1,
			}, {
				x: 158,
				y: -2e1,
			}, {
				x: 200,
				y: -2.199e1,
			}, {
				x: 251,
				y: -2.398e1,
			}, {
				x: 316,
				y: -2.597e1,
			}, {
				x: 398,
				y: -2.797e1,
			}, {
				x: 501,
				y: -2.996e1,
			}, {
				x: 631,
				y: -3.196e1,
			}, {
				x: 794,
				y: -3.396e1,
			}, {
				x: 1000,
				y: -3.596e1,
			}]
			        },{
			        	label: 'Scatter Dataset',
			        	 backgroundColor: '#77b047',

			            data: [{
			                x: 20,
			                y: 6.5
			            }, {
			                x: 8.5,
			                y: 30
			            }, {
			                x: 40,
			                y: 7.5
			            }, {
			                x: 9.5,
			                y: 15
			            }
			            , {
			                x: 2.5,
			                y: 13
			            }
			            , {
			                x: 3.5,
			                y: 17
			            }]

			        }]
			    },
			    options: {
			    	responsive: true,
				hoverMode: 'nearest',
				intersect: true,
				title: {
					display: true,
					text: 'Chart.js Scatter Chart - Multi Axis'
				},
			        scales: {
			            xAxes: [{
			                type: 'linear',
			                position: 'bottom',
			                gridLines: {
								zeroLineColor: 'rgba(0,0,0,1)'
							}
			            }],
			            yAxes: [{
			                type: 'linear',
			                position: 'left',
			                gridLines: {
								zeroLineColor: 'rgba(3,0,200,1)'
							}
			            }]
			        }
			    }
			
	});	
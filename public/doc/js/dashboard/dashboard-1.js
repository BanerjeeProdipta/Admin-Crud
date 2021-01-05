(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
		
	var chartBar = function(){
		
		var options = {
			  series: [
				{
					name: 'Net Profit',
					data: [44, 55, 90, 80, 25, 15, 70, 55, 35, 15, 70, 55, 95, 35],
					//radius: 12,	
				}, 
				{
				  name: 'Revenue',
				  data: [15, 65, 15, 35, 30, 5, 40, 60, 10, 5, 40, 60, 10, 35]
				}, 
				
			],
				chart: {
				type: 'bar',
				height: 350,
				
				toolbar: {
					show: false,
				},
				
			},
			plotOptions: {
			  bar: {
				horizontal: false,
				columnWidth: '55%',
				endingShape: 'rounded'
			  },
			},
			colors:['#450b5a', '#ff2c53'],
			dataLabels: {
			  enabled: false,
			},
			markers: {
		shape: "circle",
		},
		
		
			legend: {
				show: true,
				fontSize: '12px',
				labels: {
					colors: '#000000',
					
					},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 12,	
				}
			},
			stroke: {
			  show: true,
			  width: 1,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				   fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
			  },
			  },
			},
			fill: {
			  opacity: 1
			},
			tooltip: {
			  y: {
				formatter: function (val) {
				  return "$ " + val + " thousands"
				}
			  }
			}
			};

			var chartBar1 = new ApexCharts(document.querySelector("#chartBar"), options);
			chartBar1.render();
	}
	
	var chartStrock = function(){
		//var date = new Date(1327359600000);
		//alert(date);
		  var options = {
          series: [{
		  data: [
            [1327359600000,31.95],
            [1327532400000,32],
            [1327878000000,33.00],
            [1328050800000,32.50],
            [1328223600000,31.85],
            [1328569200000,32.28],
            [1328742000000,32.65],
            [1329087600000,32.35],
            [1329260400000,32.46],
            [1329433200000,32.75],
            [1329865200000,32.33],
            [1330038000000,33.41],
            [1330383600000,33.27],
            [1330556400000,33.10],
            [1330902000000,33.22],
            [1331074800000,32.41],
            [1331247600000,33.64],
            [1331593200000,34.22],
            [1331766000000,34.17],
            [1332111600000,34.51],
            [1332284400000,33.56],
            [1332457200000,33.81],
            [1332799200000,34.63],
            [1332972000000,34.48],
            [1333317600000,34.70],
            [1333490400000,33.46],
            [1333922400000,33.22],
            [1334095200000,33.01],
            [1334268000000,33.18],
            [1334613600000,33.84],
            [1334786400000,32.91],
            [1335132000000,32.62],
            [1335304800000,33.13],
            [1335477600000,33.58],
            [1335823200000,33.77],
            [1335996000000,33.32],
            [1336082400000,32.61],
            [1336428000000,32.67],
            [1336600800000,31.92],
            [1336946400000,32.23],
            [1337119200000,32.36],
          ]
          
        }],
          chart: {
          id: 'area-datetime',
          type: 'area',
          height: 350,
		  width: '100%',
		  //width: 300,
          zoom: {
            autoScaleYaxis: true
          },
		  toolbar: {
				show: false
			},
        },
     colors:['#450b5a', '#E91E63', '#9C27B0'],
        dataLabels: {
          enabled: false
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
			show: false,
			type: 'datetime',
			 labels: {
			  format: 'MMM',
			},
			axisBorder: {
				  show: false,
				},
        },
		
        yaxis: {
				show: false
			},
			grid: {
				show: false,
			},	
		responsive: [{
          breakpoint: 1024,
          options: {
			   chart: {
				width: '100%',
			   }
				
		  }
        }],	
        };
		
		
		
        var chart = new ApexCharts(document.querySelector("#chartStrock"), options);
        chart.render();
      
      
        var resetCssClasses = function(activeEl) {
        var els = document.querySelectorAll('button')
        Array.prototype.forEach.call(els, function(el) {
          el.classList.remove('active')
        })
      
        activeEl.target.classList.add('active')
      }
		
	}
	var chartCircle = function(){
		
		
		var optionsCircle = {
		  chart: {
			type: 'radialBar',
			//width:320,
			height: 350,
			offsetY: 0,
			offsetX: 0,
			
		  },
		  plotOptions: {
			radialBar: {
			  size: undefined,
			  inverseOrder: false,
			  hollow: {
				margin: 0,
				size: '35%',
				background: 'transparent',
			  },
			  
			  
			  
			  track: {
				show: true,
				background: '#e1e5ff',
				strokeWidth: '10%',
				opacity: 1,
				margin: 15, // margin is in pixels
			  },


			},
		  },
		  responsive: [{
          breakpoint: 480,
          options: {
			chart: {
			offsetY: 0,
			offsetX: 0
		  },	
            legend: {
              position: 'bottom',
              offsetX:0,
              offsetY: 0
            }
          }
        }],
		
		fill: {
          opacity: 1
        },
		
		colors:['#ff2c53', '#209f84', '#ff5c00'],
		series: [71, 63, 90],
		labels: ['New', 'Recover', 'In Treatment'],
		legend: {
			fontSize: '16px',  
			show: false,
		  },		 
		}

		var chartCircle1 = new ApexCharts(document.querySelector('#chartCircle'), optionsCircle);
		chartCircle1.render();
		
	}
	
	var chartTimeline = function(){
		
		var optionsTimeline = {
			chart: {
				type: "bar",
				height: 250,
				stacked: true,
				toolbar: {
					show: false
				},
				sparkline: {
					//enabled: true
				},
				offsetX: -10,
			},
			series: [
				 {
					name: "New Clients",
					data: [75, 150, 225, 200, 35, 50, 150]
				},
				{
					name: "Retained Clients",
					data: [-100, -55, -40, -120, -70, -40, -60]
				} 
			],
			
			plotOptions: {
				bar: {
					columnWidth: "25%",
					endingShape: "rounded",
					
					colors: {
						backgroundBarColors: ['#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0'],
						backgroundBarOpacity: 1,
						backgroundBarRadius: 5,
					},

				},
				distributed: true
			},
			colors:['#209f84', '#ff2c53'],
			grid: {
				show: false,
			},
			legend: {
				show: false
			},
			fill: {
			  opacity: 1
			},
			dataLabels: {
				enabled: false,
				colors: ['#000'],
				dropShadow: {
				  enabled: true,
				  top: 1,
				  left: 1,
				  blur: 1,
				  opacity: 1
			  }
			},
			xaxis: {
			 categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
				show: false,
			  },
			  axisBorder: {
				  show: false,
				},
			},
			
			yaxis: {
				show: false
			},
			
			tooltip: {
				x: {
					show: true
				}
			}
    };
		var chartTimelineRender =  new ApexCharts(document.querySelector("#chartTimeline"), optionsTimeline);
		 chartTimelineRender.render();
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				chartBar();	
				chartStrock();	
				chartCircle();
				chartTimeline();				
			},
			
			resize:function(){
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);
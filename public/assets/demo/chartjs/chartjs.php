
	<script src="chartjs/Chart.min.js"></script>
	<script src="chartjs/utils.js"></script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
	<div style="width:75%;">
		<canvas id="canvas"></canvas>
	</div>
	<br>
	<br>
	<script>
		
		var config = {
			type: 'line',
			data: {
				labels: [<?
		for($i=0;$i<sizeof($encounters);$i++){
			if($i>0) echo ',';
			//$x=strtotime($encounters[$i]['encounterdate'])*1000;
			$x=$encounters[$i]['encounterdate'];
			$y=explode('%SE%',$encounters[$i]['painint']);
			echo "'".$x."'";
		}
		?>],
				datasets: [/*{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
		<?
		for($i=0;$i<sizeof($encounters);$i++){
			if($i>0) echo ',
			';
			$x=strtotime($encounters[$i]['encounterdate'])*1000;
			$y=explode('%SE%',$encounters[$i]['painint']);
			echo '{ x: '.$x.', y: '.$y[0].' }';
			//else echo '{ x: '.$x.' y: 0 }';
		}
		?>
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}*/]
			},
			options: {
				responsive: true,
				lineTension: 0,
				spanGaps: true,
				elements: {
					line: {
						tension: 0 // disables bezier curves
					}
				},
				/*scale: {
					ticks: {
						min: 0,
						max: 10
					}
				},*/
				title: {
					display: true,
					text: 'Pain Scale Progression'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Pain Scale'
						}
					}]
				}
				
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

	</script>
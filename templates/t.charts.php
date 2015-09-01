
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Charts</h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">График</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
        
                
                <script>
                    //var chdata = $.parseJSON($.getJSON("<?=$me->siteurl?>/processors/ajax.charts.php/gas/data"));
                    //var chdata = $.get("<?=$me->siteurl?>/processors/ajax.charts.php/gas/data");
                    //console.log(chdata);
                    var lineChartData = {
			labels : <?=$chlabel?>,
			datasets : [
				{
					label: "<?=$me->title?>",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : <?=$chdata?>
                                        //data : chdata
				}]};                                 
                    var chart1 = document.getElementById("line-chart").getContext("2d");
                        window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive : true,  
			scaleLineColor: "rgba(255,255,255,.2)", 
			scaleGridLineColor: "rgba(255,255,255,.05)", 
			scaleFontColor: "#ffffff"
		});
                </script>
                    
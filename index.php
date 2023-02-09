

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>google map</title>
</head>
<body>
	<div class="col-md-6">
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$package->115 wetheral road, owerri, imo state}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
				<br>


				<style type="text/css">
					.mapouter{
						position: relative;
						text-align: right;
						height: 500px;
						width: 100%;
					}
					.gmap_canvas{
						overflow: hidden;
						background: none!important;
						height: 500px;
						width: 100%;
					}
				</style>
				
			</div>
		</div>
	</div>
</body>
</html>

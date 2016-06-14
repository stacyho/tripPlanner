<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">		
	<link rel="stylesheet" type='text/css' href="pin.css">
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway'>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"> 
				<div class="pin-pg board"> Tourist Attractions </div>
				<?php
				$names = ["Hello", "From", "The"];

				for ($x=0; $x < sizeof($names); $x++) {
					echo "<div class='pin-pg pin-box text-center'>";
					echo "<p class='pin-pg pin-text text-center'>$names[$x]</p>";
					echo "<input type='button' class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
				}
				?> 
			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board"> Restaurants </div>
			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board"> Hotels </div>
			</div>
		</div>
	</div> <!-- /container -->
</body>
</html>
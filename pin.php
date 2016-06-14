<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSS --> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
	<link rel="stylesheet" type='text/css' href="css/style.css">
	<!-- JAVASCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="js/pin.js"></script>
	<!-- FONTS -->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway'>

</head>
<body>
	<?php include 'navbar.php' ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4"> 
				<div class="pin-pg board text-center"> Tourist Attractions </div>
				<?php
				
				//counts for ALL objects! This determines the temporary id for the objects!
				$counter = 0;

				$names = ["Hello", "From", "The"];

				for ($x=0; $x < sizeof($names); $x++) {
					echo "<div class='pin-pg pin-box text-center'>";
					echo "<p id='pin-$counter' class='pin-pg pin-text text-center' data-category='tourist'>$names[$x]</p>";
					echo "<input id='$counter' type='button' class='btn btn-default btn-xs pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
					$counter = $counter + 1;
				}
				?> 
			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board text-center"> Restaurants </div>

			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board text-center"> Hotels </div>

			</div>
		</div>
	</div> 
</body>
</html>
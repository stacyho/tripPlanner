<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">		
	<link rel="stylesheet" type='text/css' href="../css/style.css">
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway'>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"> 
				<div class="pin-pg board"> Tourist Attractions </div>

				<?php include 'yelp_api.php';
				$json_tourist = search('tourist','Dallas');
				$tourist_attractions = json_decode($json_tourist,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {
					echo "<div class='pin-pg pin-box text-center'>";
					echo "<div class='pin-pg pin-text text-center'>"; 
					echo $tourist_attractions['businesses'][$x]['name'];
					$image_url = $tourist_attractions['businesses'][$x]['image_url'];
					echo "<img src=$image_url>";
					echo "</div>";
					echo "<input type='button' class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
				}
				?>

			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board"> Restaurants </div>

				<?php
				$json_restaurants = search('restaurants','Dallas');
				$restaurants = json_decode($json_restaurants,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {
					echo "<div class='pin-pg pin-box text-center'>";
					echo "<div class='pin-pg pin-text text-center'>"; 
					echo $restaurants['businesses'][$x]['name'];
					$image_url = $restaurants['businesses'][$x]['image_url'];
					echo "<img src=$image_url>";
					echo "</div>";
					echo "<input type='button' class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
				}
				?>

			</div>
			<div class="col-md-4"> 
				<div class="pin-pg board"> Hotels </div>

				<?php
				$json_hotels = search('hotels','Dallas');
				$hotels = json_decode($json_hotels,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {
					echo "<div class='pin-pg pin-box text-center'>";
					echo "<div class='pin-pg pin-text text-center'>"; 
					echo $hotels['businesses'][$x]['name'];
					$image_url = $hotels['businesses'][$x]['image_url'];
					echo "<img src=$image_url>";
					echo "</div>";
					echo "<input type='button' class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
				}
				?>

			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

</body>
</html>
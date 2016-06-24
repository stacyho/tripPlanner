<!DOCTYPE html>
<html>
<head>
	<title>Trip Planner: Pin</title>
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
				<div class="pin-pg category"> Tourist Attractions </div>

				<?php include 'php/yelp_api.php';

				//counts for ALL objects! This determines the temporary id for the objects!
				$counter = 0;

				$json_tourist = search('tourist','Dallas');
				$tourist_attractions = json_decode($json_tourist,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {

					$id = $tourist_attractions['businesses'][$x]['id'];
					$name = $tourist_attractions['businesses'][$x]['name'];
					$image = $tourist_attractions['businesses'][$x]['image_url'];
					$address = $tourist_attractions['businesses'][$x]['location.address'];
					$city = $tourist_attractions['businesses'][$x]['location.city'];
					$country = $tourist_attractions['businesses'][$x]['location.country_code'];
					$rating = $tourist_attractions['businesses'][$x]['rating'];


					echo "<div class='pin-pg pin-box text-center'>";
					    //name
						echo "<div id='pin-".$id."' class='pin-pg pin-name text-center' data-category='tourist' data-pinid=$id data-city=$city data-country=$country> $name </div>"; 
						//image
						echo "<img class='pin-pg pin-img' src=$image>";
						//button
						echo "<input id=$id type='button' 
						class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
					$counter = $counter + 1;
				}
				?>

			</div>
			<div class="col-md-4"> 
				<div class="pin-pg category"> Restaurants </div>

				<?php
				$json_restaurants = search('restaurants','Dallas');
				$restaurants = json_decode($json_restaurants,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {

					$id = $tourist_attractions['businesses'][$x]['id'];
					$name = $tourist_attractions['businesses'][$x]['name'];
					$image = $tourist_attractions['businesses'][$x]['image_url'];
					$address = $tourist_attractions['businesses'][$x]['location.address'];
					$city = $tourist_attractions['businesses'][$x]['location.city'];
					$country = $tourist_attractions['businesses'][$x]['location.country_code'];
					$rating = $tourist_attractions['businesses'][$x]['rating'];


					echo "<div class='pin-pg pin-box text-center'>";
					    //name
						echo "<div id='pin-".$id."' class='pin-pg pin-name text-center' data-category='restaurant' data-id=$id data-city=$city data-country=$country> $name </div>"; 
						//image
						echo "<img class='pin-pg pin-img' src=$image>";
						//button
						echo "<input id=$id type='button' 
						class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
					$counter = $counter + 1;
				}
				?>

			</div>
			<div class="col-md-4"> 
				<div class="pin-pg category"> Hotels </div>

				<?php
				$json_hotels = search('hotels','Dallas');
				$hotels = json_decode($json_hotels,true);
				for ($x=0; $x < $SEARCH_LIMIT; $x++) {
					
					$id = $tourist_attractions['businesses'][$x]['id'];
					$name = $tourist_attractions['businesses'][$x]['name'];
					$image = $tourist_attractions['businesses'][$x]['image_url'];
					$address = $tourist_attractions['businesses'][$x]['location.address'];
					$city = $tourist_attractions['businesses'][$x]['location.city'];
					$country = $tourist_attractions['businesses'][$x]['location.country_code'];
					$rating = $tourist_attractions['businesses'][$x]['rating'];


					echo "<div class='pin-pg pin-box text-center'>";
					    //name
						echo "<div id='pin-".$id."' class='pin-pg pin-name text-center' data-category='hotel' data-id=$id data-city=$city data-country=$country> $name </div>"; 
						//image
						echo "<img class='pin-pg pin-img' src=$image>";
						//button
						echo "<input id=$id type='button' 
						class='btn btn-default pin-pg pin-btn pull-right' value='Pin Me!'>";
					echo "</div>";
					$counter = $counter + 1;
				}
				?>

			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

</body>
</html>
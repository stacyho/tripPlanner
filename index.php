<!DOCTYPE html>
<html>
<head>
	<title>Trip Planner: Home</title>
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
	<div class='container text-center'>
		<h1>TRIP PLANNER</h1>
		<div class='row text-center'>
			<p>TripPlanner is your very own tool to help you plan the perfect vacation.</p>
		</div>
		<div class='row'>
			<div class='col-md-3'></div>
			<div class='col-md-6'>
				Please create an account below to start planning. 
				<form role="form">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class='col-md-3'></div>
		</div>
	</div>
</body>
</html>
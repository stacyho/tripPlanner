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

	<?php

	session_start();
	if (isset($_GET['logout'])) {
		unset($_SESSION['loggedIn']);
		session_destroy();
	}

	?>

</head>
<body>

	<?php

	include_once 'config.php';

	// //user login functionality
	// if (isset($_POST['submit-user']) && $_GET['a'] === 'login') {
	// 	if ($_POST['username']== "" || $_POST['password'] == "") {
	// 		echo "<p class='warning'> You didn't enter a username or password! </p>";
	// 	}else{
	// 		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	// 		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	// 		//grab sql password to match
	// 		if ($mysqli->connect_error) {
	// 			die ("CONNECTION FAILED: ".$mysqli->connect_error);
	// 		}

	// 		$sql = "SELECT * FROM Users WHERE userName='$username'";
	// 		$result = $mysqli->query($sql);
	// 		if ($result) {
	// 			$row = $result->fetch_assoc();
	// 			$sql_pass = $row['password'];

	// 			$valid_password = password_verify($password, $sql_pass);
	// 			if ($valid_password) {
	// 				$_SESSION['loggedIn'] = $username;

	// 			}else{
	// 				echo "<p class='warning'> Your username or password is incorrect! </p>";
	// 			}
	// 		}
	// 	}
	// }

	// if (!isset($_SESSION['loggedIn'])) {
	// 	include 'add_login.php';
	// }else if (isset($_SESSION['loggedIn'])) {
	// 	if (!isset($_GET['action']) || $_GET['action'] == "add") {
	// 		include 'add_add.php';
	// 	}else if ($_GET['action'] == "edit"){
	// 		include 'add_edit.php';
	// 	}else{
	// 		include 'add_delete.php';
	// 	}
	// }
	?>
	<div class='container text-center'>
		<h1>TRIP PLANNER</h1>
		<div class='row text-center'>
			<p>TripPlanner is your very own tool to help you plan the perfect vacation.</p>
		</div>
		<?php 
			//checking if login or signup 
		if (!isset($_GET['a']) || $_GET['a'] === 'login') {
			echo "<a href='?a=signup'><button class='btn btn-default'>Sign Up</button></a>";
		}else if (isset($_GET['a']) && $_GET['a'] === 'signup') {
			echo "<a href='?a=login'><button class='btn btn-default'>Log In</button></a>";
		}


		if (isset($_POST['submit-user'])) {
			echo "UMMMM";
			if (isset($_GET['a']) && $_GET['a'] === 'signup') {
				echo "UHHHHHHH";
				if (isset($_POST['password']) && isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
					echo "im so dead";
					$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
					$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
					$hashed_password = password_hash($password);
					$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
					$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

						if ($mysqli->connect_error) {
							die ("CONNECTION FAILED: ".$mysqli->connect_error);
						}
						$new_user = $mysqli->query("INSERT INTO users(email, password, firstName, lastName) 
							VALUES('$email', '$hashed_password', '$firstname', '$lastname')");
						if(mysqli_errno()) {
							die('new_user error' . mysqli_error());
						}else {
							echo "Welcome, $firstname. Go to pin page to start pinning!";
						}

					}
				}
			}
		}
			// else if logging in 
			// db functionality check for log in. 
			// if log in successful, then go to pin page 

		?>
		<div class='row'>
			<div class='col-md-3'></div>
			<div class='col-md-6'>
				Please create an account below to start planning. 
				<form action='index.php' role="form" method='post'>
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input name='firstname' class="form-control" id="firstname">
						<label for="lastname">Last Name:</label>
						<input name='lastname' class="form-control" id="lastname">
						<label for="email">Email address:</label>
						<input name='email' type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input name='password' type="password" class="form-control" id="pwd">
					</div>
					<button name='submit-user' type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class='col-md-3'></div>
		</div>
	</div>
</body>
</html>
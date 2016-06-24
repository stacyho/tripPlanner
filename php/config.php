<?php 
// ** MySQL connection settings ** //

//Keep this as localhost for the course server
define('DB_HOST', 'localhost');

// Your course server username - sm68sp15
define('DB_USER', 'ez86');    

// Your course server password
define('DB_PASSWORD', '123'); 

// The name of the database to which you want to connect
// info230_SP16_username - info230_SP16_sm68sp16
define('DB_NAME', 'TripPlanner');    

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
	die ("CONNECTION FAILED: ".$mysqli->connect_error);
}

?>

<?php 

$pinid = $_POST['pinid'];
$category = $_POST['category'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];


include_once 'config.php';
// if can't connect
if ($mysqli->connect_error) {
	die ("CONNECTION FAILED: ".$mysqli->connect_error);
}
//search for a match in the database
$find_match = $mysqli->query("SELECT * FROM pins WHERE city='$city' AND address='$address'");
//if invalid query
if(mysqli_errno()) {
	die('find_match error' . mysqli_error());
} 
$find_match_array = $find_match->fetch_array(); 
//if there isn't a match in the db
if (is_null($find_match_array)) {
	$add = $mysqli->query("INSERT INTO pins(pinID, category, address, city, country, numPins)
		VALUES('$pinid', '$category', '$address', '$city', '$country', 1)");
	if(mysqli_errno()) {
		die('add error' . mysqli_error());
	} 
}else {
	$update = $mysqli->query("UPDATE pins SET numPins = numPins + 1 WHERE pinID = '$pinid'");
	if(mysqli_errno()) {
		die('update error' . mysqli_error());
	} 
}
?>
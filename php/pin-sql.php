<?php 

$pinid = filter_input('POST', 'pinID', FILTER_SANITIZE_STRING);
$category = filter_input('POST', 'category', FILTER_SANITIZE_STRING);
$address = filter_input('POST', 'address', FILTER_SANITIZE_STRING);
$city = filter_input('POST', 'city', FILTER_SANITIZE_STRING);
$country = filter_input('POST', 'country', FILTER_SANITIZE_STRING);

include_once 'config.php';
// if can't connect
if ($mysqli->connect_error) {
	die ("CONNECTION FAILED: ".$mysqli->connect_error);
}
//search for a match in the database
$find_match = $mysqli->query("SELECT * FROM pins WHERE city='$city' AND address='$address'");
//if invalid query
if (!$find_match) {
	die('Invalid find_match query: ' . mysql_error());
}
$find_match_array = $find_match->fetch_assoc();
//if there isn't a match in the db
if (is_null($find_match_array)) {
	$add = $mysqli->query("INSERT INTO pins(pinID, category, address, city, country, numPins)
		VALUES('$pinid', '$category', '$address', '$city', '$country', 1)");
	if (!$add) {
		die('Invalid add query: ' . mysql_error());
	}
}else {
	$update = $mysqli->query("UPDATE pins SET numPins = numPins + 1 WHERE pinID = '$pinid'");
	if (!$update) {
		die('Invalid add query: ' . mysql_error());
	}
}
?>
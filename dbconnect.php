<?php 
	// Database details
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "syschool";

	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
?>
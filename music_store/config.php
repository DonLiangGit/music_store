<?php
	$currency = '$';
	// Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "duo123456";
	$dbname = "test";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	// Test if connection occurred.
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>
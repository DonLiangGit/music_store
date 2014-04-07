<?php

	$username = $_POST['username'];
	$password = $_POST['password'];


if ($username && $password) {
	// Connect Database.
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
	
	$result = mysql_query("SELECT * FROM account WHERE account='$username'");
	$numrows = mysql_num_rows($result);
    if ($numrows!=0){
		while ($row = mysql_fetch_assoc($result)){
			$dbusername = $row["account"];
			$dbpassword = $row["password"];
		}
		if ($username == $dbusername && $password == $dbpassword) {
			header('Location: home.php');
		}
		else {
			echo "Incorrect password";
		}
	}
}
else if (!$username | !$password) {
	die("You have not complete the required field");
}
else 
	die("Please enter a username and a password.");


	// Close database connection
	mysqli_close($connection);
?>
<?php 
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

<?php 
	// Perform database query
	$query = "SELECT * FROM account";
	
	$result = mysqli_query($connection, $query);
	// Test if a query error
	if (!$result) {
		die("Query failed.");
	}
?>
<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	
	<body>
		<?php
			// Output your query
			while($row = mysqli_fetch_row($result)) {
			// output data fromeach row
			var_dump($row);
			echo "<hr />";
			}
		?>
		<?php
			// Release returned data
			mysqli_free_result($result);
		?>
	</body>
</html>

<?php
	// Close database connection
	mysqli_close($connection);
?>
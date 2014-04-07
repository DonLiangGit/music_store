<?php
	$host = "localhost";
	$user = "root";
	$pass = "duo123456";
	$db = "store";

	mysql_connect($host,$user,$pass);
	mysql_select_db($db) or die("could not find this database!");
		if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search Results</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/styles.css" rel = "stylesheet">
	</head>
	<body>
	<?php
		$query = $_POST['search'];
		$min_length = 3;
		
		if(strlen($query) >= $min_length) {
			$output = '';
			if(isset($_POST['search'])) {
				$searchq = $_POST['search'];
				$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
				$query = mysql_query("SELECT * FROM products WHERE title LIKE '%$searchq%' OR artist LIKE '%$searchq%'") or die("could not search");
				$count = mysql_num_rows($query);
		
				if($count == 0){
					$output = 'There was no search results!';
				}else{
					while($row = mysql_fetch_array($query)){
						$title = $row['title'];
						$genre = $row['genre'];
						$price = $row['price'];
				
						$output = '<div> '.$title. ' '.$genre. 'price: $' .$price. '</div>';
						echo "<h3>$output</h3>";
					}
				}
			}
				
		}else
			echo "<h3>Sorry your keyword is too short, at least 3 characters!</h3>";
	?>

	</body>
</html>




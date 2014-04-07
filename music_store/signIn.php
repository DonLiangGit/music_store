<?php

	$host = "localhost";
	$user = "root";
	$pass = "duo123456";
	$db = "store";

	mysql_connect($host,$user,$pass);
	mysql_select_db($db);


	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT *FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
		$res = mysql_query($sql);
		if (mysql_num_rows($res) == 1) {
			echo "You have successfully logged in.";
			header("Location: home.php");
			exit();
		}else {
			echo "Invalid login information, Please return to the previous page.";
			exit();
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	   <link href = "css/bootstrap.min.css" rel = "stylesheet">
	   <link href = "css/styles.css" rel = "stylesheet">
	<style type="text/css">   
	</style>
  </head>
  
  <body>
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
		<h1 class="text-center">Sign In</h1>
      </div>
      <div class="modal-body">
          <form action='signIn.php' class="form col-md-12 center-block" method='POST'>
            <div class="form-group">
            Username:<input type="text" name = "username" class="form-control input-lg" placeholder="Username">
            </div>
            <div class="form-group">
            Password:<input type="password" name = "password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button value='Log in' class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="signUp.php">Sign Up</a></span><span><a href="#">Need help?</a></span>
            </div>

          </form>
      </div>
      <div class="modal-footer">
      </div>
  </div>
  </div>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

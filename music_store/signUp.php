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
		$checkUserQuery = mysql_query("SELECT * FROM users WHERE username ='$username'");
		
		if(!$username OR !$password) {
			echo ("Error: Please enter a username or a password");
		}
		elseif(mysql_num_rows($checkUserQuery) > 0){
			echo ("Error: Username already exists!");
		}
		else {
			$query = mysql_query("INSERT INTO users VALUES('', '$username', '$password')");
			header("Location: home.php");
			exit();
		}
		

	}
	?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
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
		<h1 class="text-center">Sign Up</h1>
		<h4 class="text">It's free and alwasy will be.</h4>
      </div>
      <div class="modal-body">
          <form action='signUp.php' class="form col-md-12 center-block" method='POST'>
            <div class="form-group">
				<input type="text" name = "firstname" class="form-control input-lg" placeholder="Firstname">
            </div>
			<div class="form-group">
				<input type="text" name = "lastname" class="form-control input-lg" placeholder="Lastname">
			</div>
            <div class="form-group">
            Username:  <input type="text" name = "username" class="form-control input-lg" placeholder="Username">
            </div>
			<div class="form-group">
              <input type="text" name = "email" class="form-control input-lg" placeholder="Your Email">
            </div>
			<div class="form-group">
              <input type="text" name = "reemail" class="form-control input-lg" placeholder="Re-enter Email">
            </div>
			<div class="form-group">
            Password:  <input type="password" name = "password" class="form-control input-lg" placeholder="New Password">
            </div>
            <div class="form-group">
              <button value='Log in' class="btn btn-success btn-lg btn-block">Sign Up</button>
              <span class="pull-right"><a href="signIn.php">Already have an account</a></span><span><a href="#">Need help?</a></span>
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

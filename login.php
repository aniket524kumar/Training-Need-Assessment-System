<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="images (1).jfif" class="bosy">
	<center class="title_deg">Login Form</center>
	<center>
		<div class="form_deg">
			<h4>
				<?php
				error_reporting(0);
				session_start();
				session_destroy();
				echo $_SESSION['loginMessage'];
				?>
			</h4>
			<form action="login_check.php" method="POST" class="form_login">
				<div>
					<label class="label_deg">Username</label>
					<input type="text" name="username">
				</div>
				<div>
					<label class="label_deg">Password</label>
					<input type="Password" name="password">
				</div>
				<div>
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>
			</form>
		</div>
	</center>

</body>
</html>

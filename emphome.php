<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
else if ($_SESSION['usertype']=='admin') {
	header("location:login.php");

$host="localhost";
$user="root";
$password="";
$db="employee";

$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from user";
$result=mysqli_query($data,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	include 'emp_sidebar.php';
	?>
	<header class="header">
		
		<a href="">Employee Dashboard</a>
		<?
		php
		include 'emp_css.php';
		?>

		<div class="logout">
			<a href="logout.php" class="btn btn-primary">Logout</a>
		</div>
	</header>

	<aside>
		<ul>
			<li>
				<a href="">My Programs</a>
			</li>
			<li>
				<a href="">My Applications</a>
			</li>
		</ul>
	</aside>

	<div class="content">
		
		<? php
		while($info=$result->fetch_assoc()) 
		{	
		?>
		<div>
         <h3><? php echo "{info['Name']}"; ?> </h3>
         <h3><? php echo "{info['phone']}"; ?> </h3>
         <h3><? php echo "{info['Courses']}"; ?> </h3>
         </div>
        <? php 
    }
        ?>
	</div>

</body>
</html>
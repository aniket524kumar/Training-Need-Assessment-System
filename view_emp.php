<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

else if ($_SESSION['usertype']=='student') {
	header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$db="employee";

$data=mysqli_connect($host,$user,$password,$db);
$sql= "SELECT * from user WHERE usertype='emp'";
$result=mysqli_query($data,$sql);
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
	<header class="header">
		<?php
    include 'admin_css.php';
	?>
		
		<a href="">Admin Dashboard</a>

		<div class="logout">
			<a href="logout.php" class="btn btn-primary">Logout</a>
		</div>
	</header>

	<aside>
		<ul>
			<li>
				<a href="Admission.php">Assign Programs</a>
			</li>
			<li>
				<a href="">View Employees</a>
			</li>
			<li>
				<a href="">Add Reporting Officer</a>
			</li>
			<li>
				<a href="">Courses</a>
			</li>
			<li>
				<a href="">Add Courses</a>
			</li>
		</ul>
	</aside>

	<div class="content">
		
	<h1>Employee List</h1>
	<table border="3px">
    		<tr>
    			<th style="padding: 20px; font-size: 15px;">Name</th>
    			<th style="padding: 20px; font-size: 15px;">Email</th>
    			<th style="padding: 20px; font-size: 15px;">Phone</th>
    			<th style="padding: 20px; font-size: 15px;">Courses</th>
    			<th style="padding: 20px; font-size: 15px;">Assign</th>
    		</tr>
    		<?php
    		while ($info=$result->fetch_assoc()) {
    	
    		?>
    		<tr>
    			<td style="padding: 20px;">
    				<?php echo "{$info['Name']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['username']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['empno']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['phone']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "<a class='btn btn-primary' href='update_emp.php?empno={$info['empno']}'>Update</a>"; ?>
    			</td>
    		</tr>
    		<?php
    		}
    	
    		?>


	</div>



</body>
</html>
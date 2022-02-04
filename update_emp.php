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
$id=$_GET['empno'];
$sql="SELECT * FROM user WHERE empno='$id'";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();

if (isset($_POST['update'])) {
	$username=$_POST['username'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$Courses=$_POST['Courses'];

	$query="UPDATE user SET username='$username', name='$name', phone='$phone', Courses='$Courses'";
	$result2=mysqli_query($data,$query);
	if ($result2) {
	   echo "update success";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">;
	<link rel="stylesheet" type="text/css" href="admin.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	label
	{
		display: inline-block;
		width: 100px;
		text-align: right;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.dev_deg
	{
		background-color: skyblue;
		width: 400px;
		padding-bottom: 70px;
		padding-top: 70px;
	}
</style>
</head>
<body>
	<header class="header">
		
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
				<a href="view_emp.php">View Employees</a>
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
		
	
	<center>
		<h1>Assign Programs</h1>
		<div class="dev_deg">
		<form action="#" method="POST">
			<div>
				<label>Emp Username</label>
				<input type="text" name="username"
				value="<?php echo "{$info['username']}"; ?>">
			</div>
			<div>
				<label>Name</label>
				<input type="text" name="name"
				value="<?php echo "{$info['Name']}"; ?>">
			</div>
			<div>
				<label>Phone</label>
				<input type="number" name="phone"
				value="<?php echo "{$info['phone']}"; ?>">
			</div>
			<div>
				<label>Programs Assigned</label>
				<input type="text" name="Courses">
			</div>
			<div>
				<input class="btn btn-primary" type="submit" name="update" value="Update">
			</div>
		</form>
	</div>
	</center>



	</div>



</body>
</html>

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
$sql= "SELECT * from applications";
$result=mysqli_query($data,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

    <?php

    include 'admin_sidebar.php';

    ?>
</head>
<body>

	<? php
    include 'admin_css.php';
	?>
	

	<div class="content">
		
	    <h1>Assign Programs</h1>
    </div>

    <div class="content">
    	<center>
    	<h3>Applied for Programs</h3>
    	<br><br>
    	<table border="3px">
    		<tr>
    			<th style="padding: 20px; font-size: 15px;">Name</th>
    			<th style="padding: 20px; font-size: 15px;">Email</th>
    			<th style="padding: 20px; font-size: 15px;">Phone</th>
    			<th style="padding: 20px; font-size: 15px;">Courses</th>
    		</tr>
    		<?php
    		while ($info=$result->fetch_assoc()) {
    	
    		?>

    		<tr>
    			<td style="padding: 20px;">
    				<?php echo "{$info['Name']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['Email']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['phone']}"; ?>
    			</td>
    			<td style="padding: 20px;">
    				<?php echo "{$info['Courses']}"; ?>
    			</td>
    		</tr>
    		<?php
    	}
    		?>
    	
    	</table>
    </div>
    </center>



</body>
</html>
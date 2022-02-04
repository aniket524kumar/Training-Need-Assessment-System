<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
	$message=$_SESSION['message'];
	echo "<script type='type/javascript'>
	alert('$message');
	</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Training Need Assessment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<nav>
		<label class="logo">Training Need Assessment</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Apply</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>
	<div class="Section1">
		<label style="color: whitesmoke;">-----------------------------------------------------------------------</label>
		<img class="main_img" src="img2.png">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="download.jfif">
			</div>
			<div class="col-md-8">
				<h1 style="text-align: justify;">About POSOCO</h1>
				<p>Power System Operation Corporation Limited (POSOCO) is a CPSE under the jurisdiction of Ministry of Power, Government of India. It is responsible to ensure the integrated operation of the Grid in a reliable,efficient and secure manner. It consists of 5 Regional Load Despatch Centres and a National Load Despatch Centre (NLDC). The subsidiary may eventually be made a separate company, leaving the parent firm with only the task of setting up transmission links.</p>
			</div>
		</div>
	</div>
	<center>
		<h1 style="padding-top: 60px;">Training Need Assessment</h1>
	</center>
	<div class="desc">
				<p style="text-align: justify;" style="padding-left: 30px;">Training Needs Assessment” (TNA) is the method of determining if a
                training need exists and, if it does, what training is required to fill the gap. TNA seeks to identify accurately the levels of the present situation in the target surveys, interview, observation, secondary data and/or workshop. The gap between the present status and desired status may indicate problems that in turn can be translated into a training need.Training can reduce, if not eliminate, the gap, by equipping the participants with knowledge and skills and by encouraging them to build and enhance their capabilities. The data on the present status are vital to the evaluation or impact survey in the latter part of the training cycle. These shall serve as the baseline data. The following are some techniques for acquiring such data. These may be applied
                independently or in combination.  There are three key areas that are considered accurate assessors of those needs:</p>

                <p>• Skill proficiency of employees</p>
                <p>• Employees' frequency of skill usage</p>
                <p>• Level of employees' skills crucial to job performance</p>
			</div>
	<center>
		<h1>Programs</h1>
	</center>
	<div class="desc2">
		<h3 style="padding-left: 60px;">Functional Programs</h3>
		        <p style="padding-left: 60px;">• Functional Program 1</p>
                <p style="padding-left: 60px;">• Functional Program 2</p>
                <p style="padding-left: 60px;">• Functional Program 3</p>
                <p style="padding-left: 60px;">• Functional Program 4</p>
                <p style="padding-left: 60px;">• Functional Program 5</p>
                <p style="padding-left: 60px;">• Functional Program 6</p>
                <p style="padding-left: 60px;">• Functional Program 7</p>

		
	</div>

	<div class="desc3">
		<h3 style="padding-left: 60px;">Behavioural Programs</h3>
		        <p style="padding-left: 60px;">• Behavioural Program 1</p>
                <p style="padding-left: 60px;">• Behavioural Program 2</p>
                <p style="padding-left: 60px;">• Behavioural Program 3</p>
                <p style="padding-left: 60px;">• Behavioural Program 4</p>
                <p style="padding-left: 60px;">• Behavioural Program 5</p>
                <p style="padding-left: 60px;">• Behavioural Program 6</p>
                <p style="padding-left: 60px;">• Behavioural Program 7</p>

		
	</div>

	<center>
		<h1>Application Form</h1>
	</center>
<center>
	<div align="center" class="admission_form">
		<form action="data_check.php" method="POST">
			
		<div class="adm_in">
			<label class="inpttt">Name</label>
			<input class="inpuut" type="text" name="name">
		</div>

		<div class="adm_in">
			<label class="inpttt">Email</label>
			<input class="inpuut" type="text" name="email">
		</div>

		<div class="adm_in">
			<label class="inpttt">Phone</label>
			<input class="inpuut" type="text" name="phone">
		</div>
		<div class="adm_in">
			<label class="inpttt">Courses</label>
			<textarea class="inpuuut" name="courses"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="Submit" value="Submit" name="apply">
		</div>


		</form>
	</div>
	</center>

	<footer>
		<h2 style="color: black;">..............................................................................</h2>
	</footer>

</body>
</html>
<?php
session_start();
$host="localhost";

$user="root";

$password="";

$db="employee";

$data=mysqli_connect($host,$user,$password,$db);

if ($data===false) {
	die("connection error");
}

if (isset($_POST['apply'])) 
{
	$data_name=$_POST['name'];
	$data_email=$_POST['email'];
	$data_phone=$_POST['phone'];
	$data_courses=$_POST['courses'];


	$sql="INSERT INTO applications(name,email,phone,courses)
    VALUES ('$data_name','$data_email','$data_phone','$data_courses')";

    $result=mysqli_query($data,$sql);

    if ($result) {
     $_SESSION['message']="Application sent successfully";
     header("location:index.php");
    }

    else
    {
    	echo "Application Failed";
    }
}
?>

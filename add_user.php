<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="INSERT INTO `student`(`name`, `gender`, `dob`, `number`, `address`, `email`, `password`) VALUES ('".$name."','".$gender."','".$dob."','".$number."','".$address."','".$email."','".$password."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		header('Location: login.php');
		echo "Done";
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>
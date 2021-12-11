<?php include "layouts/header.php"?>
<?php
include "config.php";
$id =  $_GET['a'];
$sql = "delete from student where id='$id'";
$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		echo "<script> alert('Data Deleted Successfully!'); </script>";
	}
	else
	{
		echo "Something went wrong";
	}
?>
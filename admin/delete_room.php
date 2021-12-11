<?php include "layouts/header2.php"?>
<?php
include "config.php";
$id =  $_GET['a'];
$sql = "delete from rooms where id='$id'";
$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		echo "<script> alert('Data Deleted Successfully!'); </script>";
        header('Location: rooms.php');
	}
	else
	{
		echo "Something went wrong";
	}
?>
<?php include "layouts/header.php"?>
<?php

include "config.php";

$id =  $_GET['id'];
$name =  $_GET['name'];
$gender =  $_GET['gender'];
$dob =  $_GET['dob'];
$number =  $_GET['number'];
$address =  $_GET['address'];
$email =  $_GET['email'];
$sql = "select * from student where id='$id'";
$query = mysqli_query($conn,$sql);

?>
<style>
    body{
        color: white;
        background: url(images/bg3.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .container {
        margin-top: 1%;
        margin-bottom: 1%;
        width: 60%;
        background-color: #26262b9e;
        padding-top:2%;
        padding-bottom:2%;
        border-radius: 10%;
    }
    .btn-primary {
        background-color: #673AB7;
    }
</style>
<body>
<div class="container">

    <center><h2>Student Details</h2></center></br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
        
            <div class="col-sm-5">
            <input type="text" class="form-control" id="name" value="<?php echo "$name" ?>" name="name" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="gender">Gender:</label>
	  
            <div class="col-sm-5">
            <select id="gender" class="form-control" value="<?php echo "$gender" ?>" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="dob">Date Of Birth:</label>
            <div class="col-sm-5">
            <input type="date" class="form-control" value="<?php echo "$dob" ?>" id="dob" name="dob" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="number">Contact No.:</label>
            <div class="col-sm-5">
            <input type="tel" class="form-control" value="<?php echo "$number" ?>" id="number" name="number" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address:</label>
	  
            <div class="col-sm-5">
                <textarea class="form-control" id="address" name="address" required><?php echo "$address" ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
        
            <div class="col-sm-5">
            <input type="email" class="form-control" value="<?php echo "$email" ?>" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<script>
</script>  
</body>
<?php

if(isset($_GET['submit']))
{
    $name =  $_GET['name'];
    $gender =  $_GET['gender'];
    $dob =  $_GET['dob'];
    $number =  $_GET['number'];
    $address =  $_GET['address'];
    $email =  $_GET['email'];
    $sql = "update student set name='$name',gender='$gender',dob='$dob',number='$number',address='$address',email='$email'";
    $query = mysqli_query($conn,$sql);
    if($query)
	{
		session_start();
        header('Location: statewisereport.php');
		echo "<script> alert('Data Updated Successfully!'); </script>";
	}
	else
	{
		echo "Something went wrong";
	}
}
?>
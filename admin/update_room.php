<?php include "layouts/header2.php"?>
<?php

include "config.php";

$id =  $_GET['id'];
$room_no =  $_GET['room_no'];
$seater =  $_GET['seater'];
$type =  $_GET['type'];
$fees =  $_GET['fees'];
$vacancy =  $_GET['vacancy'];
$sql = "select * from student where id='$id'";
$query = mysqli_query($conn,$sql);

?>
<style>
    body{
        color: white;
        background: url(images/bg11.jpg) no-repeat center center fixed; 
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
    <center><h2>Edit Room Details</h2></center></br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="id">Room-ID:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="id" value="<?php echo "$id" ?>" name="id" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="room_no">Room-No.:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="room_no" value="<?php echo "$room_no" ?>" name="room_no" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="seater">Seater:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="seater" value="<?php echo "$seater" ?>" name="seater" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="type">Type:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="type" value="<?php echo "$type" ?>" name="type" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="number">Fees:</label>
            <div class="col-sm-5">
            <input type="number" class="form-control" id="fees" value="<?php echo "$fees" ?>" placeholder="Enter Fees" name="fees" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="vacancy">Vacancy:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="vacancy" value="<?php echo "$vacancy" ?>" name="vacancy" required>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name="submit"  class="btn btn-primary">Update Rooms</button>
            </div>
        </div>
    </form>
</div>
<script>
</script>  
</body>
<?php

if(isset($_GET['submit']))
{
    $room_no =  $_GET['room_no'];
    $seater =  $_GET['seater'];
    $type =  $_GET['type'];
    $fees =  $_GET['fees'];
    $vacancy =  $_GET['vacancy'];
    $sql = "update rooms set room_no='$room_no',seater='$seater',type='$type',fees='$fees',vacancy='$vacancy' where id='$id'";
    $query = mysqli_query($conn,$sql);
    if($query)
	{
		session_start();
        header('Location: rooms.php');
		echo "<script> alert('Data Updated Successfully!'); </script>";
	}
	else
	{
		echo "Something went wrong";
	}
}
?>

<?php include "layouts/header2.php"?>
<?php

include "config.php";

$id =  $_GET['id'];
$day =  $_GET['day'];
$breakfast =  $_GET['breakfast'];
$lunch =  $_GET['lunch'];
$tiffin =  $_GET['tiffin'];
$dinner =  $_GET['dinner'];
$sql = "select * from food where id='$id'";
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
    <center><h2>Edit Food-Menu</h2></center></br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="id">Day-ID:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="id" value="<?php echo "$id" ?>" name="id" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="day">Day:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="day" value="<?php echo "$day" ?>" name="day" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="breakfast">Breakfast:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="breakfast" value="<?php echo "$breakfast" ?>" name="breakfast" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="lunch">Lunch:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="lunch" value="<?php echo "$lunch" ?>" name="lunch" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="tiffin">Tiffin:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="tiffin" value="<?php echo "$tiffin" ?>" name="tiffin" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="dinner">dinner:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="dinner" value="<?php echo "$dinner" ?>" name="dinner" required>
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
    $id =  $_GET['id'];
    $day =  $_GET['day'];
    $breakfast =  $_GET['breakfast'];
    $lunch =  $_GET['lunch'];
    $tiffin =  $_GET['tiffin'];
    $dinner =  $_GET['dinner'];
    $sql = "update food set id='$id',day='$day',breakfast='$breakfast',lunch='$lunch',tiffin='$tiffin',dinner='$dinner' where id='$id'";
    $query = mysqli_query($conn,$sql);
    if($query)
	{
		session_start();
        header('Location: food.php');
		echo "<script> alert('Data Updated Successfully!'); </script>";
	}
	else
	{
		echo "Something went wrong";
	}
}
?>

<?php include "layouts/header2.php"?>
<?php

include "config.php";

$id =  $_GET['id'];
$room_no =  $_GET['room_no'];
$seater =  $_GET['seater'];
$type =  $_GET['type'];
$fees =  $_GET['fees'];
$sql = "select * from student where id='$id'";
$query = mysqli_query($conn,$sql);

?>
<style>
    body{
        color: white;
        background: url(images/b4.jpg) no-repeat center center fixed; 
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
    <center><h2>Book Room</h2></center></br>
    <form class="form-horizontal" action="pay.php" target="_blank" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="id">Room-ID:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="id" value="<?php echo "$id" ?>" name="room_id" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="room_no">Room-No.:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="room_no" value="<?php echo "$room_no" ?>" name="room_no" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="seater">Seater:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="seater" value="<?php echo "$seater" ?>" name="seater" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="type">Type:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="type" value="<?php echo "$type" ?>" name="type" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="number">Fees:</label>
            <div class="col-sm-5">
            <input type="number" class="form-control" id="fees" value="<?php echo "$fees" ?>" placeholder="Enter Fees" name="price" readonly>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name="submit"  class="btn btn-primary"><a href="https://pages.razorpay.com/pl_I4nmdhklGIezdg/view">Book Room</a></button>
            </div>
        </div>
    </form>
</div>
<script>
</script>  
</body>
<?php include "layouts/footer.php"?>

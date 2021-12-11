<?php include "layouts/header2.php"?>
<style>
    body{
        color: white;
        background: url(images/b10.jpg) no-repeat center center fixed; 
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
<?php
    include "config.php";

    if($_POST)
    {
        $room_no=$_POST['room_no'];
        $seater=$_POST['seater'];
        $fees=$_POST['fees'];
        $type=$_POST['type'];
        $vacancy=$_POST['vacancy'];
        
        $sql="INSERT INTO `rooms`(`room_no`, `seater`, `fees`, `type`, `vacancy`) VALUES ('".$room_no."','".$seater."','".$fees."','".$type."','".$vacancy."')";
    
        $query = mysqli_query($conn,$sql);
        if($query)
        {
            session_start();
            echo "<script> alert('Rooms Added Successfully!'); </script>";
            header('Location: rooms.php');
        }
        else
        {
            echo "Something went wrong";
        }
        
        }    
?>    
<div class="container">

    <center><h2>Adding rooms vaccancies</h2></center></br>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="room_no">Room_no.:</label>
        
            <div class="col-sm-5">
            <input type="text" class="form-control" id="room_no" placeholder="Enter Room-no" name="room_no" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="seater">Seater:</label>
	  
            <div class="col-sm-5">
            <select id="seater" class="form-control" name="seater" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="type">Type:</label>
            <div class="col-sm-5">
            <select id="type" class="form-control" name="type" required>
                <option value="AC">AC</option>
                <option value="NON-AC">NON-AC</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="number">Fees:</label>
            <div class="col-sm-5">
            <input type="number" class="form-control" id="fees" placeholder="Enter Fees" name="fees" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="vacancy">Vacancy:</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="vacancy" placeholder="Enter Vacancy" name="vacancy" required>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Add Rooms</button>
            <p>Wanted to view rooms? <a href="rooms.php" style="color: yellow;">Rooms</a></p>
            </div>
        </div>
    </form>
</div>
<script>
</script>  
</body>
<?php include "layouts/footer.php"?>
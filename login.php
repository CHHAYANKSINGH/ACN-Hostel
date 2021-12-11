<?php include "layouts/header.php"?>
<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `student` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['number'] = $row['number'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['email'] = $row['email'];
			header('Location: profile.php');
		}
		else
		{
			echo "<script> alert('Invalid Email or Password.'); </script>";
		}
	}
?>
<style>
    body{
        color: white;
        background: url(images/b1.jpg) no-repeat center center fixed; 
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
    <center><h2>Students Login</h2></center></br>
    <form class="form-horizontal" method="POST" action="" onsubmit ="return verifyPassword()">
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="password">Password:</label>
            <div class="col-sm-5">          
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
                <input type="checkbox" onclick="myFunction()">Show Password<br>
                <span id = "message" style="color:red"> </span>
            </div>
        </div>
        <div class="form-group">        
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Login</button>
            <p>Don't have account?<a href="signup.php" style="color: yellow;">Sign-up</a></p>
        </div>
        </div>
    </form>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
    }
</script>
</body>
<?php include "layouts/footer.php"?> 
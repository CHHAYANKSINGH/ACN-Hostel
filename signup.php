<?php include "layouts/header.php"?>
<style>
    body{
        color: white;
        background: url(images/student_signup.png) no-repeat center center fixed; 
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

    <center><h2>Student Registration form</h2></center></br>
    <form class="form-horizontal" method="post" action="add_user.php" onsubmit ="return verifyPassword()">
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
        
            <div class="col-sm-5">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="gender">Gender:</label>
	  
            <div class="col-sm-5">
            <select id="gender" class="form-control" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="dob">Date Of Birth:</label>
            <div class="col-sm-5">
            <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="number">Contact No.:</label>
            <div class="col-sm-5">
            <input type="tel" class="form-control" id="number" placeholder="Enter number" name="number" required>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address:</label>
	  
            <div class="col-sm-5">
                <textarea class="form-control" id="address" placeholder="Enter Address" name="address" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
        
            <div class="col-sm-5">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
            <div class="col-sm-5">          
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
            <input type="checkbox" onclick="myFunction()">Show Password<br>
            <span id = "message" style="color:red"> </span>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <p>Already have account? <a href="login.php" style="color: yellow;">Login</a></p>
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
    function verifyPassword() {
        var pw = document.getElementById("password").value;
        var lowerCaseLetters = /[a-z]/g;
        var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;
        var character = /[@#$%^&*!]/g;
        if(pw == "") {
            document.getElementById("message").innerHTML = "**Fill the password please!";
            return false;
        }
        if(!pw.match(lowerCaseLetters)) {
            document.getElementById("message").innerHTML = "**Password must have a lowercase characters";
            return false;
        }
        if(!pw.match(upperCaseLetters)) {
            document.getElementById("message").innerHTML = "**Password must have a uppercase characters";
            return false;
        }
        if(!pw.match(character)) {
            document.getElementById("message").innerHTML = "**Password must have a special characters";
            return false;
        }
        if(!pw.match(numbers)) {
            document.getElementById("message").innerHTML = "**Password must have a number";
            return false;
        }
        if(pw.length < 8) {
            document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }
        if(pw.length > 15) {
            document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
            return false;
        } else {
        }
    }
</script>  
</body>
<?php include "layouts/footer.php"?>
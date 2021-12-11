<?php include "layouts/header2.php"?>
<style>
    body{
        color: white;
        background: url(images/b7.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
h3.text-center{
    margin-top: 50px;
    font-size: 38px;
    font-family: 'Times New Roman', Times, serif;
    }
#casesList tr:first-child{
    font-weight: 600;
    background-color: #c5edf7;
    font-size: 130%;
    }
#casesList tr td:first-child{
    font-weight: 600;
    width: 20%;
    }
.table{
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    }
#casesList tr td:nth-child(2){
    color: red;
    }
#casesList tr td:nth-child(3){
    color: green;
    }
#casesList tr td:nth-child(4){
    color: black;
    }
</style>
<body>
<section>
    <div class="container">
        <h2 class="text-center pt-4" style="color: black;">Student Details</h2>
        <form class="form-horizontal" method="POST" action="" >
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="id" style="color: black;">ID:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="id" placeholder="Enter ID" name="get_id" required>
            </div>    
                <button type="submit" name="search" class="btn btn-primary">Search</button>
       
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="background-color: #000000a8;">
                    <tr>
                        <th class="text-center">ID No.</S></th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">DOB</th>
                        <th class="text-center">Number</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';
                    if(isset($_POST['get_id']))
                    {
                        $get_id = $_POST['get_id'];
                        $sql1 = "select * from student where id='$get_id'";
                        $query1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($query1) > 0)
                        {
                            while($rows = mysqli_fetch_array($query1)){
                    ?>
                    
                    <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['name']; ?></td>
                            <td class="py-2"><?php echo $rows['gender']; ?></td>
                            <td class="py-2"><?php echo $rows['dob']; ?></td>
                            <td class="py-2"><?php echo $rows['number']; ?></td>
                            <td class="py-2"><?php echo $rows['email']; ?></td>
                            <td class="py-2"><?php echo $rows['address']; ?></td>
                            <td class="py-2"><a href="update.php?id=<?php echo $rows['id'];?>&name=<?php echo $rows['name'];?>&gender=<?php echo $rows['gender'];?>&dob=<?php echo $rows['dob'];?>&number=<?php echo $rows['number'];?>&address=<?php echo $rows['address'];?>&email=<?php echo $rows['email'];?>"><span class="glyphicon glyphicon-edit"></span> Edit/Update</a></td>
                            <td class="py-2"><a href="delete.php?a=<?php echo $rows['id']; ?>"><span class="glyphicon glyphicon-remove-sign"></span> Remove</a></td>
                    </tr>
                    <?php
                            }
                        }
                        else{
                         ?>
                        <tr><td>No Record Found!</td></tr> 
                    <?php       
                    }
                }        
                    ?>
                    <?php
                    $sql = "SELECT * FROM `student`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['name']; ?></td>
                            <td class="py-2"><?php echo $rows['gender']; ?></td>
                            <td class="py-2"><?php echo $rows['dob']; ?></td>
                            <td class="py-2"><?php echo $rows['number']; ?></td>
                            <td class="py-2"><?php echo $rows['email']; ?></td>
                            <td class="py-2"><?php echo $rows['address']; ?></td>
                            <td class="py-2"><a href="update.php?id=<?php echo $rows['id'];?>&name=<?php echo $rows['name'];?>&gender=<?php echo $rows['gender'];?>&dob=<?php echo $rows['dob'];?>&number=<?php echo $rows['number'];?>&address=<?php echo $rows['address'];?>&email=<?php echo $rows['email'];?>"><span class="glyphicon glyphicon-edit"></span> Edit/Update</a></td>
                            <td class="py-2"><a href="delete.php?a=<?php echo $rows['id']; ?>"><span class="glyphicon glyphicon-remove-sign"></span> Remove</a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>


            </table>

        </div>

    </div>
    </section>    
</body>
<?php include "layouts/footer.php"?>
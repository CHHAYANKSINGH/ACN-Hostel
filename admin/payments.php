<?php include "layouts/header2.php"?>
<style>
    body{
        color: white;
        background: url(images/b12.jpg) no-repeat center center fixed; 
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
        <h2 class="text-center pt-4" style="color: black;">Payments</h2>
        <form class="form-horizontal" method="POST" action="" >
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="id" style="color: black;">Student-ID:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="get_studentid" placeholder="Enter Student-ID" name="get_studentid" required>
            </div>    
                <button type="submit" name="search" class="btn btn-primary">Search</button>
       
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="background-color: #000000a8;">
                    <tr>
                        <th class="text-center">Student-ID</S></th>
                        <th class="text-center">Student-Name</th>
                        <th class="text-center">Contact-No.</th>
                        <th class="text-center">Eamil</th>
                        <th class="text-center">Room-ID</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Payment-ID</th>
                        <th class="text-center">Payment-Time</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';
                    if(isset($_POST['get_studentid']))
                    {
                        $get_studentid = $_POST['get_studentid'];
                        $sql1 = "select * from payments where Id='$get_studentid'";
                        $query1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($query1) > 0)
                        {
                            while($rows = mysqli_fetch_array($query1)){
                    ?>
                    
                    <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['Id']; ?></td>
                            <td class="py-2"><?php echo $rows['Name']; ?></td>
                            <td class="py-2"><?php echo $rows['Contact_no']; ?></td>
                            <td class="py-2"><?php echo $rows['Email']; ?></td>
                            <td class="py-2"><?php echo $rows['room_id']; ?></td>
                            <td class="py-2"><?php echo $rows['Amount']; ?></td>
                            <td class="py-2"><?php echo $rows['Status']; ?></td>
                            <td class="py-2"><?php echo $rows['razorpay_payment_id']; ?></td>
                            <td class="py-2"><?php echo $rows['payment_date']; ?></td>
                            
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
                    $sql = "SELECT * FROM `payments`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['Id']; ?></td>
                            <td class="py-2"><?php echo $rows['Name']; ?></td>
                            <td class="py-2"><?php echo $rows['Contact_no']; ?></td>
                            <td class="py-2"><?php echo $rows['Email']; ?></td>
                            <td class="py-2"><?php echo $rows['room_id']; ?></td>
                            <td class="py-2"><?php echo $rows['Amount']; ?></td>
                            <td class="py-2"><?php echo $rows['Status']; ?></td>
                            <td class="py-2"><?php echo $rows['razorpay_payment_id']; ?></td>
                            <td class="py-2"><?php echo $rows['payment_date']; ?></td>
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

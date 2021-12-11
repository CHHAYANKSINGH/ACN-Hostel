<?php include "layouts/header2.php"?>
<style>
    body{
        color: white;
        background: url(images/b22.jpg) no-repeat center center fixed; 
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
        <h2 class="text-center pt-4" style="color: black;">Rooms Details</h2>
        <form class="form-horizontal" method="POST" action="" >
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="id" style="color: black;">Room-No.:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="get_room_no" placeholder="Enter Room-no." name="get_room_no" required>
            </div>    
                <button type="submit" name="search" class="btn btn-primary">Search</button>
       
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color: black;">
                    <tr>
                        <th class="text-center">ID No.</S></th>
                        <th class="text-center">Room-No.</th>
                        <th class="text-center">Seater</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Fees</th>
                        <th class="text-center">Vacancy</th>
                        <th class="text-center">Book</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';
                    if(isset($_POST['get_room_no']))
                    {
                        $get_room_no = $_POST['get_room_no'];
                        $sql1 = "select * from rooms where room_no='$get_room_no'";
                        $query1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($query1) > 0)
                        {
                            while($rows = mysqli_fetch_array($query1)){
                    ?>
                    
                    <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['room_no']; ?></td>
                            <td class="py-2"><?php echo $rows['seater']; ?></td>
                            <td class="py-2"><?php echo $rows['type']; ?></td>
                            <td class="py-2"><?php echo $rows['fees']; ?></td>
                            <td class="py-2"><?php echo $rows['vacancy']; ?></td>
                            <td class="py-2"><a href="payment-form.php?id=<?php echo $rows['id'];?>&room_no=<?php echo $rows['room_no'];?>&fees=<?php echo $rows['fees'];?>&seater=<?php echo $rows['seater'];?>&type=<?php echo $rows['type'];?>&vacancy=<?php echo $rows['vacancy'];?>" target=”_blank”>BOOK</a></td>
                            
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
                    $sql = "SELECT * FROM `rooms`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['room_no']; ?></td>
                            <td class="py-2"><?php echo $rows['seater']; ?></td>
                            <td class="py-2"><?php echo $rows['type']; ?></td>
                            <td class="py-2"><?php echo $rows['fees']; ?></td>
                            <td class="py-2"><?php echo $rows['vacancy']; ?></td>
                            <td class="py-2"><a href="payment-form.php?id=<?php echo $rows['id'];?>&room_no=<?php echo $rows['room_no'];?>&fees=<?php echo $rows['fees'];?>&seater=<?php echo $rows['seater'];?>&type=<?php echo $rows['type'];?>" target=”_blank”>BOOK</a></td>
                            
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
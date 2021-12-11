<?php include "layouts/header2.php"?>
<style>
    body{
        background: url(images/f2.jpg) no-repeat center center fixed; 
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
    color: white;
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
        <h2 class="text-center pt-4" style="color: black;">Food Menu</h2>
        <form class="form-horizontal" method="POST" action="" >
        <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="id">Day-ID:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="get_dayid" placeholder="Enter Day-ID" name="get_dayid" required>
            </div>    
                <button type="submit" name="search" class="btn btn-primary">Search</button>
       
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-bordered">
                <thead style="color: white;background-color: #000000a8;">
                    <tr>
                        <th class="text-center">Day-ID</S></th>
                        <th class="text-center">Day</th>
                        <th class="text-center">Break-Fast</th>
                        <th class="text-center">Lunch</th>
                        <th class="text-center">Tiffin</th>
                        <th class="text-center">Dinner</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';
                    if(isset($_POST['get_dayid']))
                    {
                        $get_dayid = $_POST['get_dayid'];
                        $sql1 = "select * from food where id='$get_dayid'";
                        $query1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($query1) > 0)
                        {
                            while($rows = mysqli_fetch_array($query1)){
                    ?>
                    
                    <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['day']; ?></td>
                            <td class="py-2"><?php echo $rows['breakfast']; ?></td>
                            <td class="py-2"><?php echo $rows['lunch']; ?></td>
                            <td class="py-2"><?php echo $rows['tiffin']; ?></td>
                            <td class="py-2"><?php echo $rows['dinner']; ?></td>
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
                    $sql = "SELECT * FROM `food`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['day']; ?></td>
                            <td class="py-2"><?php echo $rows['breakfast']; ?></td>
                            <td class="py-2"><?php echo $rows['lunch']; ?></td>
                            <td class="py-2"><?php echo $rows['tiffin']; ?></td>
                            <td class="py-2"><?php echo $rows['dinner']; ?></td>
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

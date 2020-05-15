# Online-Food-delivery-management-system
VTU 5th sem-DBMS mini-project
<?php
include('connection/connect.php');
session_start();
if($_SESSION['user_id']!=35){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Online Food </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
</head>

<body>
   <a href="index.php" class="btn btn-outline-success">Home</a>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="card">
            <div class="card-header bg-info">
                <h3 style="text-align: center;">
                    Order Details
                </h3>
            </div>
            <div class="card-body">
                <div class='row'>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'> Name</h3>
                </div>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'> Food Name</h3>
                </div>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'> Date</h3>
                </div>
                <div class='col-md-2'>
                    <h3 style='text-align: center;'> Price</h3>
                </div>
                 <div class='col-md-1'>
                    <h3 style='text-align: center'> Qty</h3>
                </div>
                </div>
                <?php
                   if(isset($_SESSION['user_id'])){
                  $sql="SELECT * FROM users_orders";
                  $run=mysqli_query($db,$sql);
                  while($row=mysqli_fetch_array($run)){
                      $uid=$row['u_id'];
                      $foname=$row['title'];
                      $qty=$row['quantity'];
                      $price=$row['price'];
                      $date=$row['date'];
                      $sql1="SELECT * FROM users WHERE u_id='$uid'";
                      $run1=mysqli_query($db,$sql1);
                      $rows=mysqli_fetch_array($run1);
                      $fname=$rows['f_name'];
                      $lname=$rows['l_name'];
                      $name=$fname.$lname;
                      echo " <div class='row'>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'> $name</h3>
                </div>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'> $foname</h3>
                </div>
                <div class='col-md-3'>
                    <h3 style='text-align: center;'>$date</h3>
                </div>
                <div class='col-md-2'>
                    <h3 style='text-align: center;'> $price</h3>
                </div>
                 <div class='col-md-1'>
                    <h3 style='text-align: center'> $qty</h3>
                </div>
                </div><br>";
                    }
                 }  
                ?>
            </div>
        </div>
    </div>

        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>

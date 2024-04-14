<!DOCTYPE html>
<html>
<?php 
// session_start();
require 'conn.php';
require "../verify_librarian.php";
include "../header_librarian.php";

// $conn = Connect();
?>
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

          

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <a class="navbar-brand page-scroll" href="index.php">
                  Home </a>
                  <a class="navbar-brand page-scroll" href="entercustomer.php">
                  Add customer</a>
<?php 
    $sql1 = "SELECT * FROM member";

    $result1 = $con->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>


    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
    
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="15%">Customer Name</th>
<th width="20%">user name</th>
<th width="20%">email</th>
<th width="10%">bonus</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["email"] ?></td>
<td><?php echo $row["bonus"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
        <div class="container">
    
    </div>

            <?php
        } ?>   

  



</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> Inventory</h5>
                </div>
            </div>
        </div>
    </footer>
</html>
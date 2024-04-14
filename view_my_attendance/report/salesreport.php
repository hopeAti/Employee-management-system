
<?php 
require 'conn.php';
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title></title>
<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
<style>
html {
height: 100%;
}

h1 {
font-size: 20px;
text-transform:uppercase;
font-family: "Times New Roman", Times, serif;
}
.linear-wipe {
text-align: center;
background: -webkit-gradient(linear, left top, right top, color-stop(20%, #FF3202), color-stop(40%, #FF6E02), color-stop(60%, #FF6E02), color-stop(80%, #FF3202));
background: linear-gradient(to right, #FF3202 20%, #FF6E02 40%, #FF6E02 60%, #FF3202 80%);
background-size: 200% auto;
color: #000;
background-clip: text;
text-fill-color: transparent;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
-webkit-animation: shine 3s linear infinite;
animation: shine 1s linear infinite;
}
@-webkit-keyframes shine {
to {
background-position: 200% center;
}
}
@keyframes shine {
to {
background-position: 200% center;
}
}
</style>
</head>
<body style="background-color:black;">

<h2 class="linear-wipe">BROOKSIDE DAIRY EMPLOYEE ATTENDANCE MANAGEMENT SYSTEM</h2>
</body>
</html>

<html lang="en">
	<head>
		<title>Attendance</title>
		<meta charset="UTF-8" name="viewport" content="width=device-widht, initial-scale=1"/>
		
	
		
		<link rel="stylesheet" type="text/css" href="/css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="/css/form_styles.css">
		<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
		<link rel="stylesheet" type="text/css" href="inventory/css/css/header_style.css" />
	</head>


<body  style="background-color:black;">
	
	<div class="col-md-3" ></div>
	<div class="col-md-6 well">
	
		<h3 class="text-primary"style="background-color:blue"></h3>
		<a style="background-color:magenta" class="btn btn-primary" href="../admin.php"><span class="glyphicon glyphicon-back"></span> back</a>
		
		<form method="POST" class="form-inline" action="">
			<select name="month" class="form-control" required="required">
				<option value="">---Select a month---</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select name="year" class="form-control" required="required">
				<option value="">---Select a year---</option>
				<?php
					for($i=date("Y"); $i >= 2017; $i--){
						echo "<option value='".$i."'>".$i."</option>";
					}
				?>
			</select>
			<button style="background-color:magenta" class="btn btn-primary" name="filter"><span class="glyphicon glyphicon-search"></span> Filter</button>
		</form>

		<br />
		<?php include 'get_week.php'?>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true"style="background-color:blue">
		<div class="modal-dialog">
			<form action="save_stock.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Item Name</label>
								<input type="text" class="form-control" name="item_name" required="required"/>
							</div>
							<div class="form-group">
								<label>Brand Name</label>
								<input type="text" class="form-control" name="brand_name" required="required"/>
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="date" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<style>
	body{
    background:url(brooksidedairy.jpg);
    background-image: linear-gradient();
    background-position:center;
    background-size: cover;
    background-repeat: no-repeat;
}
</style>
<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION["username"])){
    header("location:../adminloginpage.php");

} 
?>
<html lang = "eng">
	<head>
		<title>TimeKeeper</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />


		    <!-- Bootstrap CSS -->    
    <link href="css3/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css3/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css3/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets3/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets3/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets3/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css3/owl.carousel.css" type="text/css">
	<link href="css3/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css3/fullcalendar.css">
	<link href="css3/widgets.css" rel="stylesheet">
    <link href="css3/style.css" rel="stylesheet">
    <link href="css3/style-responsive.css" rel="stylesheet" />
	<link href="css3/xcharts.min.css" rel=" stylesheet">	
	<link href="css3/jquery-ui-1.10.4.min.css" rel="stylesheet">
	</head>
	<body style="background-color:#23472d;">
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color:#23472d;">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = ""><?php include('animate/index.html');?></p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<?php 

     require_once("connect.php");


   $id = mysqli_real_escape_string($conn,$_SESSION['username']);


	$r = mysqli_query($conn,"SELECT * FROM admin_info where admin_id = '$id'") or die (mysqli_error($con));

	$row = mysqli_fetch_array($r);

	 $id=$row['username'];
	 $username=$row['firstname'];
	//  $lastname=$row['lastname'];

?>
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Welcome!, <?php echo ucwords(htmlentities($username)); ?>&nbsp;<i class = "glyphicon glyphicon-user"></i> 	
<b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
		
			<br />
			<div class = "alert alert-info">Attendance Records</div>
                <button   onclick="printpart()"type="submit" id="btn_print" name="btn_print" class="btn btn-fill "style="background-color:#4834bb;"><a >Print</a></button>
<a  href=report2/salesreport.php style="padding:20px">check by month</a>
	<div class = "well col-lg-12" id="toprint">				
				<table id = "table" class = "table table-striped">
            
					<thead class = "alert-warning">
						<tr>
							
							<!-- <th>Employees ID</th> -->
							<th>Employee Number</th>
							<th>Employee name</th>
                            <th>Time in</th>
							<th>Time out</th>
							<th>Date </th>
							
						
						
						</tr>
					</thead>
					<tbody>
					<?php
					
					$username = mysqli_real_escape_string($conn,$_SESSION['username']);

						$q_time = $conn->query("SELECT * FROM `timein` ") or die(mysqli_error());
						while($f_time=$q_time->fetch_array()){
						



					?>	
						<tr>
							<td><?php echo ucwords(htmlentities($f_time['user_no']))?> </td>
							<td><?php echo ucwords(htmlentities($f_time['user_name']))?> 
							
							

							<td><?php echo htmlentities($f_time['time'])?></td>
							<td><?php echo htmlentities($f_time['out'])?></td>
							<td><?php echo htmlentities($f_time['date'])?></td>


							<?php
							}
						
							?>
						
						</tr>
						
				
					
					</tbody>
				<tr>
				
                  
				</table>
				<!-- <nav class="navbar navbar-light">
                  <form class="form-inline">
                      <a href="view_attendance.php"><input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Sign In"></a>-->
                     <!-- <a href="./addusers.php" style="border:1px solid #cc5200;padding:0%;border-radius: 6px;position: absolute;"> add users </a>

                  </form>
                  
               </nav>
             -->
			</div>
		
		</div>

			
		</div>


		<div class = "navbar navbar-fixed-bottom alert-info">
			<?php echo include 'get_ip/ip.php'; ?>
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
<script>
    function printpart () {
      var printwin = window.open("");
      printwin.stop();
      printwin.document.write(document.getElementById("toprint").innerHTML);
      printwin.print();
      printwin.close();
    }
    
    </script>
</html>
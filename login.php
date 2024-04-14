<?php

require_once 'config/connect.php';
if(isset($_POST['search'])){
	error_reporting(0);

$employee = mysqli_real_escape_string($conn,$_POST['user_no']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

// $pass=sha1($password);
// $salt="a1Bz20ydqelm8m1nel";
// $password=$salt.$pass;

date_default_timezone_set("africa/nairobi");
$time = date("h:i A",strtotime("+0 HOURS"));
// $timeI = $time;
// $timeO = $time;



$date = date("M-d-Y");
$q_emp = $conn->query("SELECT * FROM `late` WHERE user_no = '$employee' and `password` = '$password'") or die(mysqli_error());

$f_emp = $q_emp->fetch_array();


	if($f_emp['user_no']==$employee){
		if($f_emp['id']=="OFFLINE"){

			$conn->query("UPDATE `late` SET `id` = 'ONLINE' WHERE `user_no` = '$employee' and `password` = '$password'") or die(mysqli_error());
				echo"<div class='alert alert-success alert-dismissible fade show' role='alert'  id='success-alerts'>  <strong><h1>Time In</h1></strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
						$emp_name = $f_emp['fname']." ".$f_emp['mname']." ".$f_emp['lname'];

						echo "<div class='alert alert-success hide alert-dismissible fade show' role='alert' id='success-alert'>".ucwords($emp_name)." <label class = 'text-info'> Time In at  ".date("h:i A", strtotime($time))." ".$date."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
// $time=$time;
$conn->query("INSERT INTO `timein`(`user_no`, `user_name`, `password`, `time`, `out`) VALUES('$employee','$emp_name','$password','$time','')") or die(mysqli_error($conn));
								
		}elseif($f_emp['id']=="ONLINE"){
			
			function number_of_working_days($startDate, $endDate)
			
			{
				$wdays = $days;
				$startTimestamp = strtotime($startDate);
				$endTimestamp = strtotime($endDate);
				for ($i = $startTimestamp; $i <= $endTimestamp; $i = $i + (60 * 60 * 24)) {
					if (date("N", $i) <= 5) $wdays = $wdays + 1 ;
				}
				return $wdays;
			}
		
			$startDate = "timein";
			$endDate = "timeout";
$wdays = number_of_working_days($startDate, $endDate);
			#$wkdays = $conn->query("SELECT days FROM `late` WHERE user_no = '$employee' and `password` = '$password'") or die(mysqli_error());
			$sql0="SELECT `days` from `late` WHERE `user_no` = '$employee' and `password` = '$password'";
			
			// $days = $_POST["days"];

			$days = $wdays ;
			
			$conn->query("UPDATE `late` SET days = days + $days  WHERE `user_no` = '$employee' and `password` = '$password' ") or die(mysqli_error());	
			// echo "Total number of working days between $startDate and $endDate is: " . $days . " day(s). ";


$sql0="SELECT * from `late` WHERE `user_no` = '$employee' and `password` = '$password'";
// if ($date>999 && $amount<4999){
// 	$con->query("UPDATE `member` SET bonus = bonus + 10  WHERE `email` = '$cemail' ") or die(mysqli_error());	

// 	}
$payment = 700 ;
$conn->query("UPDATE `late` SET payment = payment + $payment  WHERE `user_no` = '$employee' and `password` = '$password' ") or die(mysqli_error());	
			// echo "Total pay is: " . $payment . " day(s). ";

			
				$conn->query("UPDATE `late` SET `id` = 'OFFLINE' WHERE `user_no` = '$employee' and `password` = '$password'") or die(mysqli_error());	
				echo"<div class='alert alert-danger alert-dismissible fade show' role='alert' id='danger-alert'>  <strong><h1>Time Out</h1></strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";


					$emp_name = $f_emp['fname']." ".$f_emp['mname']." ".$f_emp['lname'];
						echo "<div class='alert alert-danger hide alert-dismissible fade show' role='alert' id='danger-alerts'>".ucwords($emp_name)." <label class = 'text-info'> Time Out at  ".date("h:i A", strtotime($time))." ".$date."  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";






#
// 			$sql="SELECT `time` from  `timein` WHERE `user_no` = '$employee' and `password` = '$password'";

// echo $row['time']-$time; 

// $id = $employee;
$q_time = $conn->query("SELECT * FROM `timein` where user_no = '$employee' and id='$employee'") or die(mysqli_error($conn));


// while($f_time=$q_time->fetch_array()){

	



	



#
	// $from       = $timeI;
	// 				$to = htmlentities($f_time['time']);
	// 				echo $to;
// // $from       = '13:43:13';
// $to         = '16:00:13';
					// $total      = strtotime($to) - strtotime($from);
					// $hours      = floor($total / 60 / 60);
					// $minutes    = round(($total - ($hours * 60 * 60)) / 60);
					// $seconds    = round(($hours - ($minutes * 60 * 60)) / 60);
					// echo $hours. 'hrs','.'.$minutes.'mins' .$seconds; 'seconds';
							$conn->query("UPDATE `timein` SET `out` = '$time' WHERE  `user_no` = '$employee' order by id") or die(mysqli_error());
// }
			}
		}else{
			/*echo"
						<h2 style='color:red;'>
							<span class = 'glyphicon glyphicon-warning-sign'></span></h2>
								<div style='color:red;'><h3>Invalid  ID !</h3></div>";*/

								 echo" <div class='alert alert-warning hide alert-dismissible fade show' role='alert'><strong>Invalid EmployeeID and Password, Please Try Again!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
	}

	
// 	function number_of_working_days($startDate, $endDate)
// {
//     $workingDays = 0;
//     $startTimestamp = strtotime($startDate);
//     $endTimestamp = strtotime($endDate);
//     for ($i = $startTimestamp; $i <= $endTimestamp; $i = $i + (60 * 60 * 24)) {
//         if (date("N", $i) <= 5) $workingDays = $workingDays + 1;
//     }
//     return $workingDays;
// }

// $startDate = "time";
// $endDate = "out";
// $workingDays = number_of_working_days($startDate, $endDate);
// echo "Total number of working days between $startDate and $endDate is: " . $workingDays . " day(s).";

?>




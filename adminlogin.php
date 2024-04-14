<?php 

require_once("config/connect.php");

session_start();

if(isset($_POST["log1"])){

date_default_timezone_set('Africa/Nairobi');
$date = date("Y-m-d H:i:s");

$user_unsafe=$_POST['username'];
$pass_unsafe= $_POST['password'];

$user = mysqli_real_escape_string($conn,$user_unsafe);
$pass1 = mysqli_real_escape_string($conn,$pass_unsafe);

// $pass=sha1($pass1);
// $salt="a1Bz20ydqelm8m1nel";
// $pass1=$salt.$pass;



//$pass11 = password_hash( $pass1, PASSWORD_BCRYPT);

//$pass1 = password_hash( $pass1, PASSWORD_BCRYPT, array('cost' => 12));



$query=mysqli_query($conn,"SELECT * FROM admin_info WHERE username = '$user' AND password = '$pass1'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query);
           $id=$row['admin_id'];
           $_SESSION["username"] = $row["admin_id"];
		   $_SESSION["username"] = $row["username"];
    
           $counter=mysqli_num_rows($query);
            
		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid adminID or Password,Please try again!');
				  document.location='adminloginpage.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['username']=$id;	
			


                 
			  	echo "<script type='text/javascript'>document.location='view_my_attendance/admin.php'</script>";  
	  }
   }
?>
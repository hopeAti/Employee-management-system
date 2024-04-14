
<?php 
$conn = mysqli_connect("localhost","root","","employee");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>
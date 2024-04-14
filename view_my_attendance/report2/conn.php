<?php
	$conn = mysqli_connect('localhost', 'root', '', 'employee');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
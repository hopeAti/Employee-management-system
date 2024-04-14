<?php
	$conn = mysqli_connect('localhost', 'root', '', 'delmo_sys');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
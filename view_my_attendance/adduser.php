<?php
			include "connect.php";
			
			if(isset($POST['add']));

			{
				 $fname = htmlentities($_POST['fname']);
				$password = htmlentities($_POST['password']);
				$lname = htmlentities($_POST['lname']);
                $mname = htmlentities($_POST['mname']);
				$user_no = htmlentities($_POST['user_no']);
				$designation = htmlentities($_POST['designation']);
                $department = htmlentities($_POST['department']);
                $id = htmlentities($_POST['id']);

				
				
				mysqli_query($conn,"INSERT INTO late ( user_no, password, fname , mname,lname,designation,department,id) VALUES ( '$user_no', '$password', '$fname', '$mname', '$lname', '$designation', '$department','$id')") or die (mysqli_error());

				echo "<script type='text/javascript'>alert('user was added successfully!');document.location='admin.php'</script>";


			}
		?>
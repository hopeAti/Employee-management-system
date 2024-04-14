<?php
	require 'conn.php';
	
	if(ISSET($_POST['filter'])){
		$month = $_POST['month'];
		$year = $_POST['year'];
		$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		
	
?>
		<?php
			echo "<h3>".$months[$month - 1]." ".$year."</h3>";
		?>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#week1">first week</a></li>
			<li><a data-toggle="tab" href="#week2">second week</a></li>
			<li><a data-toggle="tab" href="#week3">third week</a></li>
			<li><a data-toggle="tab" href="#week4">fourth week</a></li>
			<button   onclick="printpart()"type="submit" id="btn_print" name="btn_print" class="btn btn-fill "style="background-color:#fff;"><a >Print</a></button>

		</ul>
		
		<div class="tab-content" id="toprint" >
			<div id="week1" class="tab-pane fade in active" style="padding:0px;">
			
					<table class="table table-bordered" >
          
					<thead class="alert-success">
						<tr>
							<h4><b> 1 <h4></b>
						<th>employee number</th>
							<th>name</th>
							<th>time in</th>
							<th>time out</th>
							<th>date</th>
						
						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php
							$data = [];
							$week = [];
							$i = 0;
							$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());

							while($fetch = mysqli_fetch_assoc($query)){
								$week[$i] = $fetch['week'];
								$data[$i] = array('week' => $fetch['week'],'user_no' => $fetch['user_no'],'user_name' => $fetch['user_name'],'time' => $fetch['time'],'out' => $fetch['out'],'date' => $fetch['date']);
								$i++;
							}
							$array = array_values(array_unique($week));
							foreach($data as $section => $list){
								if($list['week'] === $array[0]){
						?>
							<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							}
						
						?>

						
					</tbody>
				</table>
						</div>
			<div id="week2" class="tab-pane fade in active" style="padding:0px;">
				<table class="table table-bordered">
					<thead class="alert-success">
					<tr>
							<h4><b> 2 <h4></b>
							<th>employee number</th>
							<th>name</th>
							<th>time in</th>
							<th>time out</th>
							<th>date</th>
						
						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php
								$data = [];
								$week = [];
								$i = 0;
								$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());

							while($fetch = mysqli_fetch_assoc($query)){
								$week[$i] = $fetch['week'];
								$data[$i] = array('week' => $fetch['week'],'user_no' => $fetch['user_no'],'user_name' => $fetch['user_name'],'time' => $fetch['time'],'out' => $fetch['out'],'date' => $fetch['date']);
								$i++;
							}
							$array = array_values(array_unique($week));
							foreach($data as $section => $list){
								if($list['week'] === $array[1]){
						?>
						<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							}
						
						?>
						
					</tbody>
				</table>
			</div>
			<div id="week3" class="tab-pane fade in active" style="padding:0px;">
				<table class="table table-bordered">
					<thead class="alert-success">
						<tr>
						<tr>
							<h4><b> 3 <h4></b>
							<th>employee number</th>
							<th>name</th>
							<th>time in</th>
							<th>time out</th>
							<th>date</th>
						
						</tr>
					</thead>
					<tbody style="background-color:#ghgffg;">
						<?php
							$data = [];
							$week = [];
							$i = 0;
							$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());

							while($fetch = mysqli_fetch_assoc($query)){
								$week[$i] = $fetch['week'];
								$data[$i] = array('week' => $fetch['week'],'user_no' => $fetch['user_no'],'user_name' => $fetch['user_name'],'time' => $fetch['time'],'out' => $fetch['out'],'date' => $fetch['date']);
								$i++;
							}
							$array = array_values(array_unique($week));
							foreach($data as $section => $list){
								if($list['week'] === $array[2]){
						?>
						<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							}
						
						?>
						
					</tbody>
				</table>
			</div>
			<div id="week4" class="tab-pane fade in active" style="padding:0px;" >
				<table class="table table-bordered">
					<thead class="alert-success">
						<tr>

						<tr>
							<h4><b>  4 <h4></b>
						<th>employee number</th>
							<th>name</th>
							<th>time in</th>
							<th>time out</th>
							<th>date</th>
						
						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php
								$data = [];
								$week = [];
								$i = 0;
								$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());

								while($fetch = mysqli_fetch_assoc($query)){
									$week[$i] = $fetch['week'];
									$data[$i] = array('week' => $fetch['week'],'user_no' => $fetch['user_no'],'user_name' => $fetch['user_name'],'time' => $fetch['time'],'out' => $fetch['out'],'date' => $fetch['date']);
									$i++;
								}
							$array = array_values(array_unique($week));
							foreach($data as $section => $list){
								if($list['week'] === $array[3]){
						?>
						<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							}
						
						?>
						
			
					<tbody style="background-color:#fff;">
						<?php
							$data = [];
							$week = [];
							$i = 0;
							$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());

							while($fetch = mysqli_fetch_assoc($query)){
								$week[$i] = $fetch['week'];
								$data[$i] = array('week' => $fetch['week'],'user_no' => $fetch['user_no'],'user_name' => $fetch['user_name'],'time' => $fetch['time'],'out' => $fetch['out'],'date' => $fetch['date']);
								$i++;
							}
							$array = array_values(array_unique($week));
							foreach($data as $section => $list){
								if($list['week'] === $array[4]){
						?>
						<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							}
						
						?>
						
					</tbody>
				</table>
			</div>
		</div>
		
		
<?php
	}else{
?>
	<table class="table table-bordered" >
					<thead class="alert-success">
					<tr>
							<h4><b><h4></b>
							<tr>
						<th>employee number</th>
							<th>name</th>
							<th>time in</th>
							<th>time out</th>
							<th>date</th>
						
						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php
						require "conn.php";
						$query = mysqli_query($conn, "SELECT WEEK(date) AS `week`,`user_no`,`user_name`,`time`,`out`,`date` FROM `timein` WHERE YEAR(date) = '$year' && MONTH(date) = '$month' ORDER BY `week` ASC") or die(mysqli_error());
						while($fetch = mysqli_fetch_assoc($query)){
							
						?>
						
						<tr>
								<td><?php echo $list['user_no']?></td>
								<td><?php echo $list['user_name']?> </td>
								<td><?php echo $list['time']?></td>
								<td><?php echo $list['out']?></td>
								<td><?php echo $list['date']?></td>
								
							</tr>
						<?php
								}
								
							
						
						?>
						
					</tbody>
				</table>
<?php
	}
?>
<script>
    function printpart () {
      var printwin = window.open("");
      printwin.stop();
      printwin.document.write(document.getElementById("toprint").innerHTML);
      printwin.print();
      printwin.close();
    }
    
 
    
    </script>
	<style>
	body{
    background:url(../img3/th.jpeg);
    background-image: linear-gradient();
    background-position:center;
    background-size: cover;
    background-repeat: no-repeat;
}
</style>
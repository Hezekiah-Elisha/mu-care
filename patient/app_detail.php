<?php 
	session_start();
	include '../resources/config.php';

	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>My Appointment</title>
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="./patient.css">
	</head>	
	<body>

		<?php
			include_once 'patient_side_menu.php';
		?>
		<div class="container">
			<div class="header">
				<div class="nav">
					<div class="search">
						
					</div>
					<div class="user">
						<a href="#" class="btn" style="background:#eee;color:#eee;">Add</a>
						<!--<img src="./image.jpg" alt="">-->
						<div class="img-case" style="padding-top:5%;display:flex;">
							<?php

					if(isset($_SESSION['patient'])){
					$name = $_SESSION['patient'];
					echo '
						<li><a><i class="far fa-user"></i>'.$name.'</a></li>
						';
					}else{
						echo '

						';
					}

				?>
						</div>
					</div>
				</div>
			</div>
			<?php 
				$patient = $_SESSION['patient'];
				$query ="SELECT * FROM appointment WHERE id='$id'";

				$res = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($res);

				$q = "SELECT name FROM doctors WHERE id='$row[doctor_id]'";
				$r = mysqli_query($conn, $q);
				$ro = mysqli_fetch_array($r);
			?>
			<div class="profile">
				<h2 style="padding-left:40%">My Appointment Note</h2>
				<div class="info">
					<img src="./appointment.jpeg" style='height:250px';>
					<div class="table-section">
					<table>
						<tr>
							<th colspan="2" style="text-decoration:underline;">MY APPOINTMENT</th>
						</tr>
						<tr>
							<td>NAME</td>
							<td><?php echo $row['name'];?></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><?php echo $row['phone'];?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $row['gender'];?></td>
						</tr>
						<tr>
							<td>Apointment Date</td>
							<td><?php echo $row['appointment_date'];?></td>
						</tr>
						<tr>
							<td>Symptoms</td>
							<td><?php echo $row['symptoms'];?></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><?php echo $row['status'];?></td>
						</tr>
						<tr>
							<td>Date Booked</td>
							<td><?php echo $row['date_booked'];?></td>
						</tr>
						<tr>
							<td>Doctor:</td>
							<td>DR. <?php echo $ro['name'];?></td>
						</tr>				
					</table>
				</div>
			</div>
		</div>

	


	</div>
	</body>
</html>
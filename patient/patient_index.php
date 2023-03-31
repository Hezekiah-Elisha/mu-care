<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Home </title>
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
	<div class="content">
		<div class="cards">
			
			<div class="card">
				<div class="box">
					<a href="./patient_profile.php">
						<h3>My Profile</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
				<div class="box">
					<a href="./appointment.php">
						<h3>Book Appointment</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>

			<div class="card">
				<div class="box">
					<a href="./view_appointment.php">
						<h3>Track Appointments</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>

			<div class="card">
				<div class="box">
					<a href="./invoice.php">
						<h3>My Invoices</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
				<div class="box">
					<a href="./view_report.php">
						<h3>Reports</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			<div class="card">
				<div class="box">
					<a href="./send_report.php">
						<h3>Send Reports</h3>
					</a>
				</div>
				<div class="icon-case">
					
				</div>
			</div>
			
		</div>
	</div>
</div>


		<?php

			if(isset($_SESSION['patient'])){
			$sname = $_SESSION['patient'];
			echo '
				<li><a>'.$name.'</a></li>
				<a href="./logout.php" class="logout">logout</a>
				';
			}else{
				echo '

				';
			}

		?>
	</div>
	</body>
</html>
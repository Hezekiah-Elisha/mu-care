<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Appointment</title>
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
	
	<div class="profile">
		<h2 style="padding-left:40%">Available Drugs</h2>
		
		<div class="drugs-section">
			<div class="drug-card">
				<img src="./drug1.jpg" alt="">
				<div class="drug-info">
					<h3>Drug Name</h3>
					<p>Drug Description</p>
					<a href="#" class="btn">Add</a>
			</div>

			<div class="drug-card">
				<img src="./drug2.jpg" alt="">
				<div class="drug-info">
					<h3>Drug Name</h3>
					<p>Drug Description</p>
					<a href="#" class="btn">Add</a>
			</div>
		</div>


	</div>
</div>

	


	</div>
	</body>
</html>
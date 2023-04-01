<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Profile</title>
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
		$query ="SELECT * FROM patients WHERE name='$patient'";

		$res = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($res);

	?>
	<div class="profile">
		<h2 style="padding-left:50%">My Profile</h2>
		<div class="info">
			<img src="./image5.png" style='height:250px';>
			<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">MY DETAILS</th>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td><?php echo $row['name'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

	</div>
	</body>
</html>
<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Invoice</title>
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
		<h2 style="padding-left:50%">My Invoices</h2>
		<?php

		$patient = $_SESSION['patient'];
		$query ="SELECT * FROM patients WHERE name='$patient'";

		$res = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($res);
		// $sname = $row['surname'];

		$querys = mysqli_query($conn, "SELECT * FROM income WHERE patient='$name'");
		$output = "";

		$output .="
			<table class='main_table_app'>
					<thead>
						<tr>
							<th>ID</th>
							<th>Doctor</th>
							<th>Patient</th>
							<th>Date Discharged</th>
							<th>Amount Paid</th>
							<th>Description</th>
							<th>Action</th>
							<tr>
							";
		if(mysqli_num_rows($querys)< 1){
				$output .= "<tr><td>No record</td></tr>";
		}
		while($row = mysqli_fetch_array($querys)){

			$id = $row['id'];
				$id = $row['id'];
				$doctor = $row['doctor'];
				$patient = $row['patient'];
				$date_discharged = $row['date_discharged'];
				$amount_paid = $row['amount_paid'];
				$description = $row['description'];
					$output .="
						<tbody class='table_app'>
							<tr>
								<td>$id</td>
								<td>$doctor</td>
								<td>$patient</td>
								<td>$date_discharged</td>
								<td>$amount_paid</td>
								<td>$description</td>
								<td>
									<a href='view_invoice.php?id=".$row['id']."'><button style='background:#0298cf; color:#fff;'>View</button></a>
								</td>
			";
		}
		$output .="</tr></table>";
		echo $output;
	?>
	</div>
</div>

	


	</div>
	</body>
</html>
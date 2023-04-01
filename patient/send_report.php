<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Send Report</title>
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
			$sname = $_SESSION['patient'];
			echo '
				<li><a><i class="far fa-user"></i>'.$sname.'</a></li>
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
			include '../resources/config.php';
			if(isset($_POST['report'])){
				$amount = $_POST['amount'];

				if(empty($amount)){

				}else if(empty($message)){

				}else{
					$name = $_SESSION['patient'];
					$query = "INSERT INTO wallet(name,amount) VALUES ('$name','$amount')";
					$res = mysqli_query($conn, $query);

					if($res){
						echo "<script>alert('You have desposited sucesfully')</script>";
						header('location:./patient_index.php');
					}
				}
			}
		?>
	<div class="report">
		<form method="post">
			<h3>DEPOSIT TO YOUR E-WALLET DIRECTLY</h3>
			<input type="text" name="amount" placeholder="enter amount" class="form-control" required>

			<input type="submit" class="form-btn" name="report" value="Send Report">
		</form>
	</div>
</div>

	</div>
	</body>
</html>
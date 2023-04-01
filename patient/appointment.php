<?php 
	session_start();
	include '../resources/config.php';

	// $q = mysqli_query($conn,"SELECT id, name FROM doctors ORDER BY name ASC");
	$stmt = $conn -> prepare("SELECT id, name FROM doctors ORDER BY name ASC");
	$q = [];
    if($stmt){
        $stmt -> execute();
        $result = $stmt -> get_result();
        $doctors = $result -> fetch_all(MYSQLI_ASSOC);
        $q = $doctors;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Book Appointment</title>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
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
	<?php
		// if (isset($_POST['submit']))
		$pat = $_SESSION['patient'];
		$sel = mysqli_query($conn,"SELECT * FROM patients WHERE name='$pat'");

		$row = mysqli_fetch_array($sel);

		$name = $row['name'];
		$gender = $row['gender'];
		$phone = $row['phone'];

		if(isset($_POST['book'])){
			$date = $_POST['date'];
			$sym = $_POST['sym'];
			$doc = $_POST['doctor'];

			if(empty($sym)){

			}else{
				$query = "INSERT INTO appointment(name, gender, phone, appointment_date, symptoms, status, date_booked, doctor_id)VALUES('$name','$gender','$phone','$date','$sym','Pending',NOW(), '$doc')";
				$res = mysqli_query($conn, $query);
				if($res){
					echo "<script>alert('You have booked successfully')</script>";
					header("location:./patient/patient_index.php");
				}
			}
		}
	?>
	<form class="form-class" method="post" action="appointment.php">
		<div class="title">
			<h2>BOOK APPOINTMENT</h2>
		</div>
		<div class="half">
			<div class="item">
			<label>Appointment Date</label>
				<input type="date" id="date_picker" name="date" class="form-control" placeholder="select appointment date" required>
			</div>
		</div>
		<div class="full">
			<label>Symptoms</label>
			<input type="text" name="sym" class="form-control" placeholder="enter symptoms" required>
		</div>
		<div class="full">
			<label>Choose Doctor</label>
			<select name="doctor" id="" class="form-control">
				<?php
					foreach($q as $doctor){
						echo '<option value="'.$doctor['id'].'">'.$doctor['name'].'</option>';
					} 
				?>
			</select>
		</div>
		<div class="action">
			<input type="submit" name="book" value="book">
		</div>
	</form>
</div>
</div>
<script src="../js/datecheck.js"></script>
</body>
</html>
<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Check Patients Appointment</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		text-transform:uppercase;
		font-family: 'Oswald', sans-serif;
		font-weight:normal;
		box-sizing:border-box;
		}
		a{
			text-decoration:none;
		}
		li{
			list-style:none;
		}
		h1{
			color:#eee;
		}
		.side-menu{
			position:fixed;
			background:royalblue;
			color:#eee;
			width:20vw;
			top:0;
			display:flex;
			min-height:100vh;
			flex-direction:column;
		}
		.side-menu .brand-name{
			height:10vh;
			display:flex;
			align-items:center;
			justify-content:center;
		}
		.side-menu li{
			font-size:20px;
			padding:10px 20px;
			display:flex;
			align-items:center;
		}
		.side-menu li:hover{
			background:#eee;
			color:#333;
		}
		.container{
			position:absolute;
			right:0;
			width:80vw;
			height:100vh;
			background:#f1f1f1;
		}
		.container .header{
			position:fixed;
			top:0;
			right:0;
			width:80vw;
			height:10vh;
			background:#eee;
			display:flex;
			align-items:center;
			justify-content:center;
			box-shadow:0 4px 8px 0 rgba(0,0,0,.2);
		}
		.container .header .nav{
			width:90%;
			display:flex;
			align-items:center;
		}
		.container .header .nav .search{
			flex:3;
			display:flex;
			justify-content:center;
		}
		.container .header .nav .search input[type="text"]{
			border:none;
			background:#f1f1f1;
			padding:10px;
			width:50%;
		}
		.container .header .nav .search button{
			width:40px;
			height:40px;
			border:none;
			align-items:center;
			justify-content:center;
		}
		.container .header .nav .search button i{
			width:30px;
			height:30px;
		}
		.container .header .nav .user{
			flex:1;
			display:flex;
			justify-content:space-between;
			align-items: center;
		}
		.btn{
			background:#333;
			color:#fff;
			padding:5px 10px;
			text-align:center;
		}
		.btn:hover{
			padding:3px 8px;
			cursor:none;
		}
		.container .header .nav .user .img-case{
			position:relative;
			width:100px;
			height:50px;
		}
		.container .header .nav .user img{
			width:40px;
			height:40px;
		}
		.container .header .nav .user .img-case img{
			position:absolute;
			top:0;
			left:0;
			width:100%;

		}
		.profile{
			padding-top:5%;
		}
		.profile img{
			padding-left:30%;
		}
		.table-section{
			
		}
		
		h3{
			color:#000;
		}
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		font-family: 'Oswald', sans-serif;
		}
		.table-section{
			height:auto;
			overflow:auto;
		}
		table{
			width:100%;
			table-layout:fixed
			min-width:1000px;
			border-collapse:collapse;
		}
		thead th{
			position:sticky;
			top:0;
			background:#0298cf;
			color:#fff;
			font-size:15px;
		}
		th,td{
			border-bottom:1px solid #dddddd;
			padding:10px 20px;
			word-break:break-all;
			text-align:center;
		}
		tr:hover td{
			color:#0298cf;
			cursor:pointer;
			background:#f6f9fc;
		}
		button{
			outline:none;
			border:none;
			border-radius:6px;
			cursor:pointer;
			padding:10px;
		}
		button .edit{
			background:#0298cf;
		}
		.admin{
			width:100%;
		}
		.admin-header{
			display:flex;
			justify-content:space-between;
			align-items:center;
			padding:20px;
			background:rgb(240,240,240);
		}
		.admin-header p{
			color:#000000;
		}

		.add-new{
			padding:10px 20px;
			color:#fff;
			background:blue;
		}
		.new-admin{
			position:absolute;
			top:28%;
			right:.5rem;
			width:25rem;
			box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
			padding:2rem;
			background:whitesmoke;
			text-align:center;
		}
		.new-admin h3{
			font-size:2rem;
			text-transform:uppercase;
			color:#333;
		}
		.new-admin .form-control{
			margin:.7rem;
			background:#eee;
			border-radius:.5rem;
			padding:1rem;
			font-size:.9rem;
			text-transform:none;
			width:100%;
		}
		form{
			position:absolute;
			padding-left:50%;
			font-weight:normal;
			width:50rem;
			float:right;
			padding:2rem;
			border-radius:.5rem;
			text-align:center;
		}
		input{
		border:1px solid #333;
		border:none;
		background:none;
		border-bottom:1px solid #333;
		display:block;
		width:100%;
		padding-right:0;
		margin-bottom:10px;
		}
		.button{
			margin:1 0rem;
			display:block;
			text-align:center;
			justify-content:center;
			padding:.4rem 5rem;
			font-size:1rem;
			border-radius:.5rem;
			border:.2rem solid #333;
		}
		form.active{
			right:2rem;
			transition:.4s linear;
		}
	</style>
	
	<body>

		<div class="side-menu">
	<div class="brand-name">
		<h1>Doctor</h1>
	</div>
	<ul>
		<li><a href="./doc_index.php" style="color:#fff;text-decoration:none;"><i class="far fa-clipboard"></i>&nbsp;Dashboard</a></li>
		<li><a href="./doctor_profile.php" style="color:#fff;text-decoration:none;"><i class="fas fa-address-card"></i>&nbsp;my Profile</a></li>
		<li><a href="./patients_list.php" style="color:#fff;text-decoration:none;"><i class="fas fa-address-card"></i>&nbsp;Patients</a></li>
		<li><a href="./patient_app.php" style="color:#fff;text-decoration:none;"><i class="fas fa-calendar"></i>&nbsp;Appointments</a></li>
		<li><a href="./discharged.php" style="color:#fff;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>&nbsp;Discharged Patients</a></li>
		<li><a href="./report.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;Reports</a></li>
		<li><a href="./logout.php" class="logout" style="color:#fff;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
	</ul>
</div>

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

			if(isset($_SESSION['doctor'])){
			$name = $_SESSION['doctor'];
			echo '
				<li><a><i class="far fa-user"></i>Dr '.$name.'</a></li>
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
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM appointment WHERE id='$id'";
			$res = mysqli_query($conn, $query);

			$row = mysqli_fetch_array($res);
		}
	?>
	<div class="profile">
		<h2 style="padding-left:45%">APPOINTMENTs</h2>
		<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">APPOINTMENT DETAILS</th>
				</tr>
				<tr>
					<td>NAME</td>
					<td><?php echo $row['firstname'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Appointment date</td>
					<td><?php echo $row['appointment_date'];?></td>
				</tr>
				<tr>
					<td>symptoms</td>
					<td><?php echo $row['symptoms'];?></td>
				</tr>
				<tr>
					<td>date booked</td>
					<td><?php echo $row['date_booked'];?></td>
				</tr>
			</table>
			
</div>
</div>

<form action ="" method="post" style="padding-left:30%;">
	<h2>Invoice</h2>

	<?php if(isset($_POST['send'])){
		$fee = $_POST['fee'];
		$des = $_POST['des'];

		if(empty($fee)){

		}else if(empty($des)){

		}else{
			$doctor = $_SESSION['doctor'];
			$name = $row['name'];
			
			$query = "INSERT INTO income(doctor, patient, date_discharged, amount_paid, description) VALUES ('$doctor','$name',NOW(),'$fee','$des')";
			$res = mysqli_query($conn, $query);
			
			if($res){
				echo "<script>alert('You have sent the invoice')</script>";
				mysqli_query($conn, "UPDATE appointment SET status='Discharged' WHERE id='$id'");
			}
		}
	}
	?>
	<input type="text" name="fee" class="box" placeholder="enter amount" required>
	<input type="text" name="des" class="box" placeholder="enter description" required>
	<input type="submit" class="button" name="send" value="send">
</form>

<script>
	let invoiceForm = document.querySelector('.invoice-info');
	document.querySelector('#bill-out');
	invoiceForm.classList.toggle('active');
</script>
</body>
</html>
<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Doctors Patient List</title>
		<!--fontawesome cdn-->
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
			padding-left:30%;
			padding-top:10px;
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

			if(isset($_SESSION['patient'])){
			$name = $_SESSION['patient'];
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

	<div class="profile">
		<h2 style="padding-left:40%">Patients Lists</h2>
		<?php 
			$query = "SELECT * FROM patients";
			$res = mysqli_query($conn, $query);

			$output ="
			";
			$output = "
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>name</th>
								<th>email</th>
								<th>phone</th>
								<th>gender</th>
								<th>Action</th>
							<tr>
							";
			if(mysqli_num_rows($res) < 1){
				$output .= "<tr><td>No record</td></tr>";
			}
		while($row = mysqli_fetch_array($res)){
				$id = $row['id'];
				$name = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
				$gender = $row['gender'];

				$date_reg = $row['date_reg'];
					$output .="
						<tbody>
							<tr>
								<td>$id</td>
								<td>$name</td>
								<td>$email</td>
								<td>$phone</td>
								<td>$gender</td>
								<td>
									<a href='patientlist_view.php?id=".$row['id']."'><button style='background:#0298cf; color:#fff;'>View</button></a>
								</td>

								";
			}
			$output .="
			</tr>
			</table>";
			echo $output;
		?>
	</div>
</div>

	


	</div>
	</body>
</html>
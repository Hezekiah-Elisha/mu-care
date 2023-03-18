<?php 
	include './resources/config.php';

	if(isset($_POST['create'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		$con_pass = $_POST['con_pass'];

		$error = array();

		if(empty($name)){
			$error['ac'] = "Enter name";
		}else if(empty($email)){
			$error['ac'] = "Enter email";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if($gender == ""){
			$error['ac'] = "Select gender";
		}else if(empty($password)){
			$error['ac'] = "Enter password";
		}else if($con_pass != $password){
			$error['ac'] = "Both passwords donot match";
		}
		if(count($error)==0){
			$password = md5($password);
			$query = "INSERT INTO doctors (name,email,phone,gender,password) 
						VALUES ('$name','$email','$phone','$gender','$password')";
			$res = mysqli_query($conn, $query);
			if($res){
				echo "<script>alert('You have registered successfully')</script>";
				header("location:./doc_login.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Signup Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="./css/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	</head>
	<body>
		<?php include './includes/header.php';?>
		<div class="signup-page">
			<div class="form">
				<form class="register-form" method="post">
					<h2 class="form-title">Doctor's Sign Up</h2>
					<input type="text" name="name" placeholder="Doctor's Name" required/>
					<input type="email" name="email" placeholder="Doctor's Email" required/>
					<input type="text" name="phone" placeholder="Doctor's Phone" required/>
					<select name="gender" required>
						<option value="" disabled selected>Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					<input type="password" name="pass" placeholder="Password" required/>
					<input type="password" name="con_pass" placeholder="Confirm Password" required/>
					
					<!--<input type="date" name="dob" placeholder="Date of Birth" required/>-->
					<button type="submit" name="create">Create Account</button>
					<p class="message">Already have an account? <a href="doc_login.php">Log in</a></p>
				</form>
			</div>
		</div>
		<?php include './includes/footer.php';?>
	</body>
</html>


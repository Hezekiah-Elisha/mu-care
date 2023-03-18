<?php 
	session_start();
	include './resources/config.php';

	if(isset($_POST['login'])){

		$name = $_POST['name'];
		$pass = $_POST['pass'];

		if(empty($name)){
			echo "<script>alert('Enter name')</script>";
		}else if(empty($pass)){
			echo "<script>alert('enter password')</script>";
		}else{
			$pass = md5($pass);
			$query = "SELECT * FROM doctors WHERE name='$name' AND password='$pass'";
			$res = mysqli_query($conn, $query);

			if(mysqli_num_rows($res) == 1){
				echo "<script>alert('You have logged in successfully')</script>";
				header("location:./doctor/doc_index.php");
				
				$_SESSION['doctor'] = $name;
			}else{
				echo "<script>alert('Invalid ')</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="./css/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	</head>
	<body>
		<style>
			.login-page{
				padding-top:8%;
			}
		</style>
		<?php include './includes/header.php';?>

		<div class="login-page">
			<div class="form">
				<form class="login-form" method="post">
					<h2 class="form-title">Doctor's Log in</h2>
					<input type="text" name="name" placeholder="Username" required/>
					<input type="password" name="pass" placeholder="Password" required/>
					<button type="submit" name="login">Log in</button>
					<p class="message">Not registered? <a href="doc_signup.php">Create an account</a></p>
				</form>
			</div>
		</div>
		<?php include './includes/footer.php';?>
	</body>
</html>




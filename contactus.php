<?php 
	include './resources/config.php';

	if(isset($_POST['send_message'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$content = $_POST['content'];

		$error = array();

		if(empty($firstname)){
			$error['ac'] = "Enter firstname";
		}else if(empty($lastname)){
			$error['ac'] = "Enter surname";
		}else if(empty($email)){
			$error['ac'] = "Enter email";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if(empty($content)){
			$error['ac'] = "Enter Message";
		}
		if(count($error)==0){
			$query = "INSERT INTO message (firstname,lastname,email,phone,content,date_sent) 
						VALUES ('$firstname','$lastname','$email','$phone','$content',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./contactus.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AFIA CARE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="./css/contactus.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/navbar.css">

	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<style>
	input{
		background:none;
		border: none;
		font-size: 20px;
	}
	a{
		text-decoration:none;
	}
	html{
		font-size: 65%;
	}
</style>
<body>
	<?php include './includes/navbar.php';?>

	<section class="contact-section">
		<div class="contact-body">
			<h3>Get in Touch with Afia Care</h3>
			<h2 class="head"><span>Contact us</span></h2>
			<p class="text">Experience Quality health care with Afia Care, we deliver, we care</p>
		</div>

		<div class="contact-content">
			<div class="contact-info">
				<div>
					<span class="icon"><i class="fas fa-mobile"></i></span>
					<span>PHONE NUMBER</span>
					<span class="text">+254727497604</span>
				</div>
				<div>
					<span><i class="fas fa-mail-bulk"></i></span>
					<span>EMAIL</span>
					<span class="text">briangichuki23@gmail.com</span>
				</div>
				<div>
					<span><i class="fab fa-twitter"></i></span>
					<span>TWITTER</span>
					<span class="text">@AFIA-CARE</span>
				</div>
				<div>
					<span><i class="far fa-clock"></i></span>
					<span>OPERATION HOURS</span>
					<span class="text">DAILY 24/7 OPEN</span>
				</div>
			</div>

			<div class="contact-form">
				<form method="post">
					<div>
						<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
						<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
					</div>
					<div>
						<input type="email" class="form-control" name="email" placeholder="email" required>
						<input type="text" class="form-control" name="phone" placeholder="Phone No" required>
					</div>
					<input placeholder="message" name="content" class="form-control">
					<input type="submit" class="send-btn" name="send_message" value="Send Message">
				</form>
			</div>
		</div>

		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.80151183381!2d36.87402751400702!3d-1.2935698359971817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13e79debe02b%3A0x9a004b6b9d2a9984!2sEquity%20Afia%20Medical%20Centre!5e0!3m2!1sen!2ske!4v1651977161624!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<?php include './includes/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src="./js/main.js"></script>
</html>
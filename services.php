<!DOCTYPE html>
<html lan='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Comptible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AFIA CARE</title>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		.services{
			padding-top:7%;
			font-size: 2em;
		}
	@media(max-width:800px){
		.services{
			padding-top:15%;
		}	
	}
	@media(max-width:450px){
		.services{
			padding-top:15%;
		}
	}
	</style>
	<body>
		<?php include './includes/header.php';?>

		<section class="services">
			<h1 class="head"><span>AFIACARE</span> SERVICES</h1>
			<div class="services-container">
				<div class="services-box">
					<i class="fas fa-baby"></i>
					<h3>Paeditric services</h3>
					<p>Geared for special attention to the peculiar needs of children and infants</p>
				</div>
				<div class="services-box">
					<i class="fas fa-user-nurse"></i>
					<h3>Nursing</h3>
					<p>
						Nurses function as bridges between doctors and the patients they treat. Nurses look after overall well being of patients.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-bed" aria-hidden="true"></i>
					<h3>Ward facilities</h3>
					<p>
						Availability of Ward allotment. Provide different types of wards these are; general ward, private wards, semi-private wards depending on costs etc.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-stethoscope"></i>
					<h3>Radiology services</h3>
					<p>
						Adequate radiographic machines to meet requirements for therapeutic procudures with competent medical and technical paramedical staff
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-ambulance"></i>
					<h3>Ambulance Services</h3>
					<p>
						Providing clinical intervention on the scene for seriously ill patients and transporting people to hospital in an emergency.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-hospital-user"></i>
					<h3>Out Patient Department</h3>
					<p>
						OPD as one of services rendered, has skilled doctors along with technicians who asist patients in preliminary diagnosis and related treatments.
					</p>
				</div>
				<div class="services-box">
					<i class="fab fa-laravel"></i>
					<h3>Intensive Care Unit</h3>
					<p>
						Adequate ICU facilities for patients sufering from adverse health condition.<br>
						ICU equippped with modern technical apparatus.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-capsules"></i>
					<h3>Pharmacy & Diagnosis</h3>
					<p>
						Easy & Quick availability of medicine and other equipment required for treatment procedure is vital
						to render best healing services.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-bacterium"></i>
					<h3>Communicable Diseases</h3>
					<p>
						All communicable diseases must be reported to the local health authority. Isolation facilities must be adequate, with integral toilet facilities.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-flask"></i>
					<h3>Laboratory services</h3>
					<p>
						Services appropriate to the need of the hospital should be available, conducted and supervised by competent technicians and pathologists respectively.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-virus"></i>
					<h3>Anesthesiology service</h3>
					<p>
						Anesthesiology service is the least visible service in a hospital, but as important as others. Apart from the high professional knowledge and skill of the anesthesiologists.
					</p>
				</div>
				<div class="services-box">
					<i class="fas fa-x-ray"></i>
					<h3>Obstetrical services</h3>
					<p>
						Obstetrical services are also organised like other department with policies and procedures peculiar to its requirement.
					</p>
				</div>
			</div>
		</section>
		
		<?php include './includes/footer.php';?>
		<script src="./js/main.js"></script>

	<script>
		let navbar=document.querySelector('.navbar');
		document.querySelector('#menu-btn').onclick = () =>{
			navbar.classList.toggle('active')
		}
		window.onscroll = () =>{
			navbar.classList.remove('active')
		}
	</script>
	</body>
</html>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EQUITY AFIA</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		a{
			text-decoration: none;
		}
		ul{
			list-style:none;
		}
		#remedies{
			display:flex;
			justify-content:center;
			align-items:center;
			flex-direction:column;
			padding: 40px;
			border-bottom: 1px solid rgba(0,0,0,0.05);
		}
		.remedies-heading{
			display:flex;
			justify-content:center;
			align-items:center;
			flex-direction:column;
		}
		.remedies-heading span{
			font-size: 2rem;
			color: dodgerblue;
		}
		.remedies-heading h3{
			font-size: 2rem;
			color: blue;
			font-weight: normal;
		}
		.remedies-container{
			display:flex;
			justify-content:center;
			align-items:center;
			margin: 20px 0px;
			flex-wrap: wrap;
		}
		.remedies-box{
			width: 350px;
			background-color: #ffffffff;
			border: 1px solid #ecececec;
			margin: 20px;
		}
		.remedies-img{
			width:100%;
			height: auto;
		}
		.remedies-img img{
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position:center;
		}
		.remedies-text{
			padding:30px;
			display:flex;
			flex-direction:column;
		}
		.remedies-text span{
			color:blue;
			font-size:1.6rem;
		}
		.remedies-text .remedies-title{
			font-size: 2rem;
			font-weight:500;
			justify-content:center;
			text-align:center;
			color: #333;
		}
		.remedies-text .remedies-title:hover{
			color:dodgerblue;
			transition:all ease 0.3s;
		}
		.remedies-text p{
			color: #000;
			font-size: 1.6rem;
			display:-webkit-box;
			-webkit-line-clamp:3;
			-webkit-box-orient: vertical;
			overflow:hidden;
			text-overflow:ellipsis;
			margin: 20px 0px;
		}
		.remedies-text a:hover{
			transition:all .3s ease;
			color: #f33c3c;
		}
		.remedies-btn{
			border: 1px solid lightblue;
			background:blue;
			color: white;
			width: 20%;
			padding: 5px;
		}
		@media(max-width:800px){
		.remedies-heading{
			padding-top:15%;
			}	
		}
		@media(max-width:450px){
			.remedies-heading{
				padding-top:15%;
			}
		}	
	</style>
	<body>
		<?php include './includes/navbar.php';?>
		
		<section id="remedies" style="padding-top:7%;">
			<div class="remedies-heading">
				<span>Temporal Remedies</span>
				<h3>Try Them Out Before Visiting the hospital</h3>
			</div>
			<div class="remedies-container">

				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy5.jpeg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">STOMACH UPSET</a>
						<p>Drinking water,Avoiding lying down, take ginger, avoiding smoking and drinking alcohol</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>
				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy4.jpeg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">Frequent vomiting</a>
						<p>Try taking deep breaths, eat bland food and crackers, Wrist acupressure for vomiting</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>
				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy3.jpg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">Headaches</a>
						<p>Remove any pressure on the head, Turn down the lights, Try some herbal tea, Exercise</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>
				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy2.jpg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">Abdominal pains</a>
						<p>Get plenty of rest, Take mild painkillers , Reduce your intake of coffee, tea and alcohol</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>
				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy1.jpg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">period pain</a>
						<p>Drink more water, Eat anti-inflammatory foods, Try dietary supplements</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>
				<div class="remedies-box">
					<div class="remedies-img">
						<img src="./gallery/remedy6.jpg">
					</div>
					<div class="remedies-text">
						<span>date: 6th july 2022</span>
						<a href="#" class="remedies-title">Frequent joint pain</a>
						<p>Control your blood sugar, Quit smoking, Get routine preventive care</p>
						<a href="#" class="remedies-btn">Read More</a>
					</div>
				</div>

			</div>
		</section>
		<?php include './includes/footer.php';?>
		<script src="./js/main.js"></script>
	</body>
</html>
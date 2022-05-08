<?php
	include("connection.php");
	$sql="SELECT PropId from `property` desc limit 4;";
	$re=mysqli_query($conn,$sql);
	if($re)
	{
		$row=mysqli_fetch_row($re);
		
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
	  
		*{
			margin: 0;
			padding: 0;
		}
		header{
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1));
	background-repeat: repeat;
}
		nav{
			width: 100%;
			height: 15vh;
			background: rgba(0,0,0,0.2);
			color: white;
			display: flex;
			justify-content: space-between;
			align-items: center;
		
		}
		/*h3{
			font-size: 30px;
			animation: 2s anim-popoutin ease infinite;
			text-align: center;
			font-family: cursive;
			width: 900px;
		height: 40px;
		border-radius: 50px;
		background-color: red;
		position: relative;
		animation: myfirst 2s linear 2s infinite alternate;
		}
		@keyframes myfirst {
			0%   {background-color:red; left:200px; top:0px;}
			25%  {background-color:yellow; left:200px; top:0px;}
			50%  {background-color:silver; left:200px; top:70px;}
			75%  {background-color:skyblue; left:0px; top:70px;}
			100% {background-color:red; left:0px; top:0px;}
			}*/
			.logo{
				width: 30%;
				font-family: cursive;
				text-align: center;
			}
			nav .menu{

				display: flex;
				width: 60%;
				justify-content: space-around;
			}
		nav .menu a{
			width: 200px;
			text-decoration: none;
			color: white;
			font-weight: bold;
			font-size: 25px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.menu a:hover{
			color: red;
		}
		h2{
			font-size: 50px;
			font-weight: bold;
		}

		body{
				background-color: #444444;
				font-family: arial;
			}
			/*body{
	font-family: arial;
   }*/
   .main{
   
   margin: 30px;
   padding: 70px;
   }

						
			.slideshow-container {
				
			width: 500px;
			position: relative;
			margin: auto;
			
			}

			
			.mySlides {
			display: none;
			}

			
			.prev, .next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			margin-top: -20px;
			padding: 16px;
			color: white;
			font-weight: bold;
			font-size: 20px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			
			}

			
			.next {
			right: 0;
			border-radius: 3px 0 0 3px;
			}

			
			.prev:hover, .next:hover {
			background-color: rgba(0,0,0,0.8);
			}

			
			.text {
			color: #f2f2f2;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
			}

			
			.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
			}

			
			.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
			
			}

			.active, .dot:hover {
			background-color: #717171;
			}

			
			.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
			
			}

			@-webkit-keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
			}

			@keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
			}
			
			.card{
				width: 500px;
				height: 600px;
				display:inline-block;
				box-shadow: 2px 2px 20px black;
				border-radius: 5px; 
				margin: 2%;
				}
				.row{
					display: inline-block;
				}
			
			.image img{
				width: 500px;
				height: 500pxs;
				border-top-right-radius: 5px;
				border-top-left-radius: 5px;
			}
		
		.title{
		
			text-align: center;
			padding: 10px;
			
		}
		
		h1{
			font-size: 20px;
		}
		
		.des{
			padding: 3px;
			text-align: center;
		
			padding-top: 10px;
				border-bottom-right-radius: 5px;
			border-bottom-left-radius: 5px;
		}
		button{
			margin-top: 40px;
			margin-bottom: 10px;
			background-color: white;
			border: 1px solid black;
			border-radius: 5px;
			padding:10px;
		}
		button:hover{
			background-color: black;
			color: white;
			transition: .5s;
			cursor: pointer;
		}

</style>
<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		showSlides(slideIndex = n);
		}

		function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		}

	</script>
	<title>USER</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo"> <h1 class="" style="font-family:cursive; font-size:xx-large;">CoMpAsS</h1></div>
      <div class="menu">
        <a href="#">Home</a>
        <a href="customerPD.php">Properties</a>
        <a href="CsmartD.php">Smart City</a>
            <a href="history.php">Bookings</a>
			<a href="Clogout.php">Logout</a>
      </div>
    </nav>
  </header>

	<div class="slideshow-container">
		<div class="mySlides fade">
		<div class="numbertext">1 / 3</div>
		<img src="prop1.jpg" style="width:100%">
		<div class="text" style="font-size:xx-large; color:black; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Guwahati smart city to soon begin 17 projects at cost of over Rs 887 crore <a href="https://realty.economictimes.indiatimes.com/news/infrastructure/guwahati-smart-city-to-soon-begin-17-projects-at-cost-of-over-rs-887-crore/87902689" style="font-size:medium;">(Read more..)</a></div>
		</div>

		<div class="mySlides fade">
		<div class="numbertext">2 / 3</div>
		<img src="prop2.jpg" style="width:100%">
		<div class="text" style="font-size:xx-large; color:black; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Centre to implement 105 smart city projects in Puducherry at Rs 822 crore <a href="https://realty.economictimes.indiatimes.com/news/infrastructure/centre-to-implement-105-smart-city-projects-in-puducherry-at-rs-822-crore/88104226" style="font-size:medium;">(Read more..)</a>
		</div>
		</div>

		<div class="mySlides fade">
		<div class="numbertext">3 / 3</div>
		<img src="prop3.jpg" style="width:100%">
		<div class="text" style="font-size:xx-large; color:white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ">Aurangabad's climate action plan to come up by 2023 <a href="https://realty.economictimes.indiatimes.com/news/infrastructure/aurangabads-climate-action-plan-to-come-up-by-2023/88466951" style="font-size:medium;">(Read more..)</a>
		</div>
		</div>


		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		</div>

		<div class="main">

			<!--cards -->
		   
		   <div class="card">
		   
		   <div class="image">
			  <img src="img1.jpg">
		   </div>
		   <div class="title">
			<h1 style="color: white;">
		   New Paradise</h1>
		   </div>
		   <div class="des" style="color: white;">
			<p>Residential land/ Plot</p><p>Rs.50  Area:200Acres	</p>
			<a href="customerPD.php">
			<button>BOOK	
			</a>
			</button>
		   </div>
		   </div>
		   <div class="row">
			   <div class="col-md-12">
		   <div class="card">
		   
		   <div class="image">
			  <img src="img2.jpg">
		   </div>
		   <div class="title">
			<h1 style="color: white;">
		   Sea shore</h1>
		   </div>
		   <div class="des" style="color: white;">
			<p>Sea shore Development</p><p>Rs.545Cr  Area:20Km</p>
			<a href="customerPD.php">
			<button>BOOK	
			</a>
			</button>
		   </div>
		   </div>
		   </div>
			</div>
		    <div class="row">
			<div class="col-md-12">
		   <div class="card">
		   
		   <div class="image" >
			  <img src="img3.jpg">
		   </div>
		   <div class="title">
			<h1 style="color: white;">
		   River Rifting</h1>
		   </div>
		   <div class="des" style="color:white">
			<p>Pond reconstruction</p><p>Rs.545Cr.  Area:Near Bangalore</p>
			<a href="customerPD.php">
			<button>BOOK	
			</a>
			</button>
		   </div>
		   </div>
			</div>
			</div>
		   
		   <div class="card">
		   
		   <div class="image">
			  <img src="prop4.jpg">
		   </div>
		   <div class="title">
			<h1 style="color: white;">
		   Hill View</h1>
		   </div>
		   <div class="des" style="color: white;">
			<p>Hill view station</p><p>Rs.10Cr.  Area:8Acres</p>
			<a href="customerPD.php">
			<button>BOOK	
			</a>
			</button>
		   </div>
		   </div>
		   
		   
		   



</body>
</html>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Badmus Boat Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
		<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
		<link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
		body { font-family: 'Kiwi Maru', serif;  }
	</style>



	<body>

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="img/logo.png" height="50" width="50"> &nbsp;
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php" style="font-family: Times New Roman; font-size: 30px;"> Badmus Boat Reservation</a></li>
						</ul>



						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<a href="login.php">
									Login
									<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
								</a>
							</li>

							<li>
								<?php include_once('goto-registration.php'); ?>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<center>
						<img src="img/1.jpg" style="height: 500px; width: 100%;">
						</center>
						<div class="container">
							<div class="carousel-caption">
								<h1> Book Boat </h1>
								<p>Available Now at Low Price. Booked Now </p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Register today</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/image1.jpg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1> Let's Cruise </h1>
								<p> Better fun with friends </p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img src="img/image2.jpg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1> Badmus Island .</h1>
								<p> Let's enjoy the season. </p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<br />

		<div class="container-fluid" style = "background:#0C2C56; padding-top:30px; padding-bottom:30px; margin-top:-20px; width:100%;">
				<div class="row" style = "display:flex; justify-content:center;">
						<div class="col-md-3">
							<i class="fab fa-apple-pay fa-2x" style = "color:#fff; padding-right:5px;"></i>
							<span style = "color:#fff;"> Book and Pay online </span>
						</div>
						<div class="col-md-3">
							<i class="fas fa-anchor fa-2x" style = "color:#fff; padding-right:5px;"></i>
							<span style = "color:#fff;"> Crew and Life Vest provided </span>
						</div>
						<div class="col-md-3">
							<i class = "fas fa-user fa-2x" style = "color:#fff; padding-right:5px;"> </i>
							<span style = "color:#fff;"> Boat for up to 15 people </span>
						</div>
						<div class="col-md-3">
						<i class="fas fa-calendar-plus fa-2x" style = "color:#fff; padding-right:5px;"></i>
						<span style = "color:#fff;"> Available all week </span>
						</div>
				</div>
		</div>

		<div class="container" style = "margin-top:70px;">
				<div class="col-md-6">
						<img src="img/image1.jpg" style = "width:350px; height:350px;" class = "img-responsive img img-fluid" alt="Image Display">
				</div>
				<div class="col-md-6">
						<div>
							<h6 class = "text-muted"> BADMUS BOAT RESERVATION </h6>
							<h4 style = "font-weight:bolder;"> Easily Search and Reserve  For Your Boat Cruise or Trip </h4>
							<p> In the mood for some adventure? Get to your luxury leisure </p>
							<p> experience with just a few taps on your device. Request your boat</p>
							<p> now in our island, Contact us to cruise with us. </p>
						</div>

						<div class = "row" style = "margin-top:30px;">
								<div class="col-md-6">
									<p style = "font-weight:bolder;"> Boat Cruises </p>
									<p> Open theBoats App, Choose Your Boat, Select Cruise Details, Pay, Arrive at our Marina and Meet your Captain </p>
									<button type = "button" class = "btn btn-md btn-outline btn-info" href = "#"> Read More </button>
								</div>
								<div class="col-md-6">
									<p style = "font-weight:bolder;"> Boat Trips </p>
									<p> Open the Boats App, Choose Your Boat, Select Cruise Details, Pay, Arrive at our Marina and Meet your Captain </p>
									<button type = "button" class = "btn btn-md btn-outline btn-info" href = "#"> Read More </button>
								</div>
						</div>
				</div>
		</div>


		<div class="container" style = "margin-top:30px;;">
				<div class="row">
						<div class = "">
						<h3 class = "text-center"> Featured Listing </h3>
							<p class = "text-info text-center">  Here is a list of all our boat listing </p>
						</div>
							<div class="jumbotron">
									<div class = "section">
											<div>
													<img src="img/1.jpg" class = "img img-responsive img-thumbnail img-rounded" style = "width:170px; height:80px;" alt="">
													<div style = "margin-top:25px;">
													<p> <span style = "font-weight:bolder"> Name :  </span>  BarBeach </p>
													<p> <span style = "font-weight:bolder;"> Price: </span> $40 </p>
													<button class = "btn btn-primary btn-md" type = "button" href = "#"> View More <i class = "fas fa-search"> </i> </button>
													</div>
											</div>
									</div>
							</div>
				</div>
		</div>

		<div class = "container">
			<div class="row">
					<div>
						<h5 class = "text-muted text-center"> OUR EXPERIENCE </h5>
						<p class = "text-center" style = "font-weight:bolder; font-size:24px;">	Every type of Water Cruise Experience</p>
						<p class = "text-center" style = "font-weight:bolder; font-size:24px;"> For Every Occasion </p>
					</div>
					<div class = "row" style = "margin-top:50px;">
							<div class="col-md-4">
									<div>
										<p class = "text-center"> <i class = "fas fa-user fa-4x text-center"  style = "border:2px solid #0C2C56; border-radius:50%; padding:15px; height:50px; width:50px;"> </i> </p>
										<p style = "font-weight:bolder;" class = "text-center"> CRUISING </p>
										<p  class = "text-center"> We’re always curating boat cruise experiences for boaters in our Island. </p>
									</div>
							</div>
							<div class="col-md-4">
							<div>
										<p class = "text-center"> <i class = "fas fa-swimmer fa-4x text-center"  style = "border:2px solid #0C2C56; border-radius:50%; padding:15px; height:50px; width:50px;"> </i> </p>
										<p style = "font-weight:bolder;" class = "text-center"> SWIMMING </p>
										<p  class = "text-center"> We’re always curating swimming experiences for boaters in our Island. </p>
									</div>
							</div>
							<div class="col-md-4">
							<div>
										<p class = "text-center"> <i class = "fas fa-fish fa-4x text-center"  style = "border:2px solid #0C2C56; border-radius:50%; padding:15px; height:50px; width:50px;"> </i> </p>
										<p style = "font-weight:bolder;" class = "text-center"> FISHING </p>
										<p  class = "text-center"> We’re always curating fishing experiences for visitors in our Island. </p>
									</div>
							</div>
					</div>
			</div>
		</div>

		<div class="container" style = "margin-top:50px;">
				<div class="row">
						<div class = "jumbotron" style = "height:300px;">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">

							<h4> Subscribe to our Page below </h4>
							<input type="text" class = "form-control" placeholder = "Enter your email address"/>
							<button class = "btn btn-primary btn-md form-control" style = "margin-top:10px;" type = "button"> Submit </button>
							<p> Be the first to hear of special events and deals! </p>
							<i class = "fab fa-facebook-f fa-2x" style = "margin-right:5px; color:blue;"></i>
							<i class = "fab fa-twitter fa-2x"> </i>
							</div>
							<div class="col-md-3"></div>
						</div>
		</div>

		</div>

		<footer>


		<div class="container-fluid">
				<div class="row"  style = "background:#0C2C56; padding-top:30px; padding-bottom:30px;">
						<div class="col-md-3">
							<p style = "color:white;"> ABOUT </p>
							<div>
								<p style = "color:white;"> Badmus Boats Booking and Rental </p>
								<p style = "color:white;"> Cruise Way, Carrington Crescent Plot Admiral </p>
								<p style = "color:white;">  Lagos </p>
								<p style = "color:white;"> +35 635 63636  </p>
							</div>
						</div>
						<div class="col-md-3">
							<p style = "color:white;"> SERVICES </p>
							<p style = "color:white;"> Boat Cruise </p>
							<p style = "color:white;"> Boat Trips </p>
							<p style = "color:white;"> Transportation </p>
						</div>
						<div class="col-md-3">
							<p style = "color:white;"> PAGES </p>
							<p style = "color:white;"> About </p>
							<p style = "color:white;"> Contact Us </p>
							<p style = "color:white;"> Blog </p>
						</div>
						<div class="col-md-3">
							<p style = "color:white;"> LEGAL </p>
							<p style = "color:white;"> Privacy </p>
							<p style = "color:white;"> Terms </p>
							<p style = "color:white;"> Policy </p>
						</div>
				</div>
		</div>

		</footer>

 		<p>
 			<center>

 			</center>
 		</p>



 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"> </script>
	</body>
</html>
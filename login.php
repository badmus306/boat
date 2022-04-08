<?php
	include_once('config.php');//database
	$db = new Database();

	if(isset($_POST['login']))
	{
		$un = $_POST['un'];
		$up = $_POST['up'];

		$up = md5($up);

		$sql = 'SELECT * FROM tourist WHERE tour_un = ? AND tour_up = ?';
		$result = $db->getRow($sql, [$un, $up]);
		//echo print_r($result);

		if($result){
			$r = $result['user_type'];

			if($r == '1'){
				$_SESSION['logged'] = '1';
				header('location: admin/index.php');
			}else{
				$_SESSION['logged'] = '2';

				$_SESSION['tourID'] = $result['tour_id'];

				header('location: tourist/index.php');
			}
		}//if true

	}//end if isset log in
 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boat Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
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
								 	<i class = "fas fa-tachometer-alt" style = "margin-right:10px;"> </i> Login to the Dashboard
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

<br />
<br />
<br />
<br />
<br />
<br />
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Login <i class = "fas fa-tachometer-alt" style = "margin-right:10px;"> </i></h3>
					</div>
					<div class="panel-body">
						 <form action="" method="post">
							 	<div class="form-group">
							    <label for="inputdefault">Username:</label>
							    <input class="form-control" name="un" type="text" required autofocus
							    value="<?php if(isset($_POST['un'])){echo $_POST['un'];} ?>"
							    >
							  </div>

							   <div class="form-group">
							    <label for="inputdefault">Password:</label>
							    <input class="form-control" name="up" type="password" required>
							  </div>

							  <button class="btn btn-info" type="submit" name="login">
							  	Login
							  	<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
							  </button>
						 </form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>

		<footer style="background-color: white;">
			<center>
				&copy; All rights reserved
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>
		 <script src = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"> </script>
	</body>
</html>
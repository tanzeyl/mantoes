<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>Mantoes</title>
</head>

<body style="background: url(../public/pic/background9.jpg) center; font-family: 'Times New Roman', Times, serif;">
	<div class="navbar navbar-inverse navbar-top" style="background-color: rgba(0, 0, 0, 0.7); display: flex;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" style="font-size: 30px; color: #edeb55; border: 3px solid black;">Mantoes</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li style="font-size: 20px;"><a href="templates/checkout.php" style="color: white;">Checkout</a></li>
					<li style="font-size: 20px;"><a href="templates/viewmaterials.php" style="color: white;">Available material</a></li>
					<li style="font-size: 20px;"><a href="templates/change_prices.php" style="color: white;">Prices</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<div id="background-main">
					<div class="container">
						<center>
							<div id="banner-content" style="border: 4px solid cyan; border-radius: 50%; background-color: rgba(0, 0, 0, 0.7);">
								<h1 style="color: white;">Welcome to Mantoes!</h1><br>
								<a href="viewmaterials.php" class="”btn btn-info btn-lg active">View Materials</a>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
	<footer class="navbar-bottom" style="background-color: rgba(0, 0, 0, 0.7);">
		<div class="container">
			<center>
				<p style="font-size: 25px; color: white;">Copyright © Mantoes. All Rights Reserved | Contact Us: +91-9889974434</p>
			</center>
		</div>
	</footer>

</body>

</html>

<?php
require '../includes/common.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>Checkout Shoes</title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
	<?php
	include '../includes/header.php';
	?><br><br><br><br>
	<div class="row" style="border: 10px solid transparent;">
		<div class="col-xs-12 col-md-12">
			<div class="panel panel-default" style="border: 2px solid black;">
				<div class="panel-heading">
					<p style="text-align: center; font-size: 30px">Checkout Shoes</p>
				</div>
				<div class="panel-body">
					<form method="POST" action="checkout_script.php">
						<b style="font-size: 30px;">Select the shoe type.</b>
						<input style="font-size: 30px;" class="form-control" list="type" name="type">
						<datalist id="type">
							<option value="DVS Boot or Tactical Shoe">
							<option value="DMS Boot">
						</datalist>
						<b style="font-size: 30px;">How many pairs have you manufactured?</b>
						<div class="form-group">
							<input style="font-size: 30px;" type="text" name="shoes" class="form-control" placeholder="Enter number of shoes made." required>
						</div>
						<button class="btn btn-default btn-block" style="color: white; background: #1e6f72; font-size: 30px;">Update</button><br>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	session_destroy();
	?>
</body>

</html>

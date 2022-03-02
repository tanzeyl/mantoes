<?php
session_start();
require '../includes/common.php';
$view_q1 = "SELECT * FROM stock WHERE id = 1";
$view_q_res1 = mysqli_query($con, $view_q1) or die(mysqli_error($con));
$view_q2 = "SELECT * FROM inStock WHERE id = 1";
$view_q_res2 = mysqli_query($con, $view_q2) or die(mysqli_error($con));
$view_q3 = "SELECT * FROM used WHERE id = 1";
$view_q_res3 = mysqli_query($con, $view_q3) or die(mysqli_error($con));
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
	<title>View Available Materials</title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
	<center>
		<?php
		include '../includes/header.php';
		?>
		<?php
		if (isset($_SESSION['message'])) {
		?>
			<div class="alert alert-success" role="alert">
				<h2><?php echo $_SESSION['message']; ?></h2>
			</div>
		<?php
		}
		?>
		<br>
		<?php
		$row1 = mysqli_fetch_array($view_q_res1);
		$row2 = mysqli_fetch_array($view_q_res2);
		$row3 = mysqli_fetch_array($view_q_res3);
		?>
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-5">
								<center>
									<p style="text-align: left; font-size: 20px;">Items</p>
								</center>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Leather Football Grain:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['leatherFootballGrain'] ?>&nbspDm</p>
									<?php
									if ($row1['leatherFootballGrain'] <= 10000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['leatherFootballGrain'] ?>&nbspDm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['leatherFootballGrain'] ?>&nbspDm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['leatherFootballGrain'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="leatherFootballGrain" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Leather Lining Split CG:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['leatherLiningSplitCG'] ?>&nbspDm</p>
									<?php
									if ($row1['leatherLiningSplitCG'] <= 3000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['leatherLiningSplitCG'] ?>&nbspDm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['leatherLiningSplitCG'] ?>&nbspDm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['leatherLiningSplitCG'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="leatherLiningSplitCG" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">CG Thoker Grain:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['CGThokerGrain'] ?>&nbspDm</p>
									<?php
									if ($row1['CGThokerGrain'] <= 3000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['CGThokerGrain'] ?>&nbspDm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['CGThokerGrain'] ?>&nbspDm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['CGThokerGrain'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="CGThokerGrain" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Leather Crust Swead Split:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['leatherCrustSweadSplit'] ?>&nbspDm</p>
									<?php
									if ($row1['leatherCrustSweadSplit'] <= 5000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['leatherCrustSweadSplit'] ?>&nbspDm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['leatherCrustSweadSplit'] ?>&nbspDm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['leatherCrustSweadSplit'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="leatherCrustSweadSplit" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">PU Cloth:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['PUCloth'] ?>&nbspm</p>
									<?php
									if ($row1['PUCloth'] <= 100) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['PUCloth'] ?>&nbspm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['PUCloth'] ?>&nbspm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['PUCloth'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="PUCloth" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Lycra Cloth with 3mm Foam:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['lycraClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									if ($row1['lycraClothWith3mmFoam'] <= 50) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['lycraClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['lycraClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['lycraClothWith3mmFoam'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="lycraClothWith3mmFoam" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Liberty Cloth with 3mm Foam:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['libertyClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									if ($row1['libertyClothWith3mmFoam'] <= 50) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['libertyClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['libertyClothWith3mmFoam'] ?>&nbspm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['libertyClothWith3mmFoam'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="libertyClothWith3mmFoam" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">8 mm Foam For Counter:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['8mmFoamForCounter'] ?>&nbspsheets</p>
									<?php
									if ($row1['8mmFoamForCounter'] <= 25) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['8mmFoamForCounter'] ?>&nbspsheets</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['8mmFoamForCounter'] ?>&nbspsheets</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['8mmFoamForCounter'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="8mmFoamForCounter" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">15mm Foam For Collar Band:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['15mmFoamForCollarBand'] ?>&nbspsheets</p>
									<?php
									if ($row1['15mmFoamForCollarBand'] <= 5) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['15mmFoamForCollarBand'] ?>&nbspsheets</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['15mmFoamForCollarBand'] ?>&nbspsheets</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['15mmFoamForCollarBand'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="8mmFoamForCollarBand" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">1 inch Halter Nivaad:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['1inchHalterNivaad'] ?>&nbspKGs</p>
									<?php
									if ($row1['1inchHalterNivaad'] <= 80) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['1inchHalterNivaad'] ?>&nbspKGs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['1inchHalterNivaad'] ?>&nbspKGs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['1inchHalterNivaad'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="1inchHalterNivaad" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">2 inch Nivaad W:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['2inchNivaadW'] ?>&nbspKGs</p>
									<?php
									if ($row1['2inchNivaadW'] <= 80) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['2inchNivaadW'] ?>&nbspKGs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['2inchNivaadW'] ?>&nbspKGs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['2inchNivaadW'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="2inchNivaadW" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">19 mm Tung Binding:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['19mmTungBinding'] ?>&nbspKGs</p>
									<?php
									if ($row1['19mmTungBinding'] <= 80) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['19mmTungBinding'] ?>&nbspKGs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['19mmTungBinding'] ?>&nbspKGs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['19mmTungBinding'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="19mmTungBinding" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">600mm Eyelet:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['600mmEyelet'] ?>&nbsppieces</p>
									<?php
									if ($row1['600mmEyelet'] <= 10000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['600mmEyelet'] ?>&nbsppieces</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['600mmEyelet'] ?>&nbsppieces</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['600mmEyelet'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="600mmEyelet" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Hook:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['hook'] ?>&nbsppieces</p>
									<?php
									if ($row1['hook'] <= 8000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['hook'] ?>&nbsppieces</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['hook'] ?>&nbsppieces</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['hook'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="hook" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">7mm Jam Button:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['7mmJamButton'] ?>&nbsppieces</p>
									<?php
									if ($row1['7mmJamButton'] <= 2000) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['7mmJamButton'] ?>&nbsppieces</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['7mmJamButton'] ?>&nbsppieces</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['7mmJamButton'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="7mmJamButton" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">150cm Shoe Lace:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['150cmShoeLace'] ?>&nbsppairs</p>
									<?php
									if ($row1['150cmShoeLace'] <= 500) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['150cmShoeLace'] ?>&nbsppairs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['150cmShoeLace'] ?>&nbsppairs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['150cmShoeLace'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="150cmShoeLace" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">100cm Shoe Lace:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['100cmShoeLace'] ?>&nbsppairs</p>
									<?php
									if ($row1['100cmShoeLace'] <= 500) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['100cmShoeLace'] ?>&nbsppairs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['100cmShoeLace'] ?>&nbsppairs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['100cmShoeLace'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="100cmShoeLace" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">1.8mm TP Sheet:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['1.8mmTPSheet'] ?>&nbspsheets</p>
									<?php
									if ($row1['1.8mmTPSheet'] <= 10) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['1.8mmTPSheet'] ?>&nbspsheets</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row2['1.8mmTPSheet'] ?>&nbspsheets</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['1.8mmTPSheet'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="1.8mmTPSheet" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">3.5mm Leather Board Banwar:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['3.5mmLeatherBoardBanwar'] ?>&nbspsheets</p>
									<?php
									if ($row1['3.5mmLeatherBoardBanwar'] <= 25) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['3.5mmLeatherBoardBanwar'] ?>&nbspsheets</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['3.5mmLeatherBoardBanwar'] ?>&nbspsheets</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['3.5mmLeatherBoardBanwar'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="3.5mmLeatherBoardBanwar" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">13mm Tingle:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['13mmTingle'] ?>&nbspboxes</p>
									<?php
									if ($row1['13mmTingle'] <= 20) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['13mmTingle'] ?>&nbspboxes</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['13mmTingle'] ?>&nbspboxes</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['13mmTingle'] ?>&nbspboxes</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="13mmTingle" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Softner:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['softner'] ?>&nbsplitres</p>
									<?php
									if ($row1['softner'] <= 20) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['softner'] ?>&nbsplitres</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['softner'] ?>&nbsplitres</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['softner'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="softner" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">3mm Socks:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['3mmSocks'] ?>&nbspm</p>
									<?php
									if ($row1['3mmSocks'] <= 20) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['3mmSocks'] ?>&nbspm</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['3mmSocks'] ?>&nbspm</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['3mmSocks'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="3mmSocks" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Heel:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['heel'] ?>&nbsppairs</p>
									<?php
									if ($row1['heel'] <= 500) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['heel'] ?>&nbsppairs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['heel'] ?>&nbsppairs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['heel'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="heel" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Galli:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['galli'] ?>&nbsppairs</p>
									<?php
									if ($row1['galli'] <= 500) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['galli'] ?>&nbsppairs</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['galli'] ?>&nbsppairs</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['galli'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="galli" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Kachcha Solution for closing:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['kachchaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									if ($row1['kachchaSolutionForClosing'] <= 40) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['kachchaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['kachchaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['kachchaSolutionForClosing'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="kachchaSolutionForClosing" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Pakka Solution For Closing:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['pakkaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									if ($row1['pakkaSolutionForClosing'] <= 50) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['pakkaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['pakkaSolutionForClosing'] ?>&nbsplitres</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['pakkaSolutionForClosing'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="pakkaSolutionForClosing" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">Solution for Moulding:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<center>
									<p style="font-size: 20px;"><?php echo $row2['solutionForMoulding'] ?>&nbsplitres</p>
									<?php
									if ($row1['solutionForMoulding'] <= 50) {
									?>
										<p style="font-size: 20px; color: red;"><?php echo $row1['solutionForMoulding'] ?>&nbsplitres</p>
									<?php
									} else {
									?>
										<p style="font-size: 20px;"><?php echo $row1['solutionForMoulding'] ?>&nbsplitres</p>
									<?php
									}
									?>
									<p style="font-size: 20px;"><?php echo $row3['solutionForMoulding'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="solutionForMoulding" name="column">Reset</button>
								</form>
							</div>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Polyethene Bag:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['polyetheneBag'] ?>&nbsppieces</p>
								<?php
								if ($row1['polyetheneBag'] <= 500) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['polyetheneBag'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['polyetheneBag'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['polyetheneBag'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="polyetheneBag" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Polyethene Bag (White):</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['polyetheneBagWhite'] ?>&nbspKGs</p>
								<?php
								if ($row1['polyetheneBagWhite'] <= 10) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['polyetheneBagWhite'] ?>&nbspKGs</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['polyetheneBagWhite'] ?>&nbspKGs</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['polyetheneBagWhite'] ?>&nbspKGs</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="polyetheneBagWhite" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Carton:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['carton'] ?>&nbsppieces</p>
								<?php
								if ($row1['carton'] <= 15) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['carton'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['carton'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['carton'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="carton" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Jhall:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['jhall'] ?>&nbsppieces</p>
								<?php
								if ($row1['jhall'] <= 10) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['jhall'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['jhall'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['jhall'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="jhall" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Side Rubber Sticker:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['sideRubberSticker'] ?>&nbsppieces</p>
								<?php
								if ($row1['sideRubberSticker'] <= 1000) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['sideRubberSticker'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['sideRubberSticker'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['sideRubberSticker'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="sideRubberSticker" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Heel Rubber Sticker:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['heelRubberSticker'] ?>&nbsppieces</p>
								<?php
								if ($row1['heelRubberSticker'] <= 1000) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['heelRubberSticker'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['heelRubberSticker'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['heelRubberSticker'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="heelRubberSticker" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Tung Cloth Sticker:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['tungClothSticker'] ?>&nbsppieces</p>
								<?php
								if ($row1['tungClothSticker'] <= 1000) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['tungClothSticker'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['tungClothSticker'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['tungClothSticker'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="tungClothSticker" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Paper Band:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['paperBand'] ?>&nbsppieces</p>
								<?php
								if ($row1['paperBand'] <= 1000) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['paperBand'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['paperBand'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['paperBand'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="paperBand" name="column">Reset</button>
							</form>
						</div>
					</div>
					<hr style="border: 2px solid black;">
					<div class="row">
						<div class="col-xs-3">
							<b style="font-size: 20px;">Paper Tag:</b>
						</div>
						<div class="col-xs-4 col-xs-offset-1">
							<center>
								<p style="font-size: 20px;"><?php echo $row2['paperTag'] ?>&nbsppieces</p>
								<?php
								if ($row1['paperTag'] <= 1000) {
								?>
									<p style="font-size: 20px; color: red;"><?php echo $row1['paperTag'] ?>&nbsppieces</p>
								<?php
								} else {
								?>
									<p style="font-size: 20px;"><?php echo $row1['paperTag'] ?>&nbsppieces</p>
								<?php
								}
								?>
								<p style="font-size: 20px;"><?php echo $row3['paperTag'] ?>&nbsppieces</p>
							</center>
						</div>
						<div class="col-xs-2 col-xs-offset-2">
							<form method="POST" action="resetindividual_script.php">
								<button class="btn btn-outline-danger" value="paperTag" name="column">Reset</button>
							</form>
						</div>
					</div>
					<a href="addmaterials.php"><button class="btn btn-block" style="background: #1e6f72; color: white; font-size: 30px;">Update materials</button></a>
					<hr>
					<a href="checkout.php"><button class="btn btn-block" style="background: #1e6f72; color: white; font-size: 30px;">Checkout Shoes</button></a>
				</div>
			</div>
			<a href="reset_script.php"><button class="btn btn-block" style="background: #1e6f72; color: white; font-size: 30px;">Reset to zero</button></a>
		</div>
		</div>
		<br><br>
		<?php
		include '../includes/footer.php';
		session_destroy();
		?>
	</center>
</body>

</html>

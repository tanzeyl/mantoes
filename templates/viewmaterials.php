<?php
session_start();
require '../includes/common.php';
$view_q = "SELECT * FROM rawmaterial WHERE id = 1";
$view_q_res = mysqli_query($con, $view_q) or die(mysqli_error($con));
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
		$row = mysqli_fetch_array($view_q_res);
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['leatherFootballGrain'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['leatherLiningSplitCG'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['CGThokerGrain'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['leatherCrustSweadSplit'] ?>&nbspDm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['PUCloth'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['lycraClothWith3mmFoam'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['libertyClothWith3mmFoam'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['8mmFoamForCounter'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="8mmFoamForCounter" name="column">Reset</button>
								</form>
							</div>
						</div>
						<hr style="border: 2px solid black;">
						<div class="row">
							<div class="col-xs-3">
								<b style="font-size: 20px;">8mm Foam For Collar Band:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['8mmFoamForCollarBand'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['1inchHalterNivaad'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['2inchNivaadW'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['19mmTungBinding'] ?>&nbspKGs</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['600mmEyelet'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['hook'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['7mmJamButton'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['150cmShoeLace'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['100cmShoeLace'] ?>&nbsppairs</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['1.8mmTPSheet'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['3.5mmLeatherBoardBanwar'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['13mmTingle'] ?>&nbspsheets</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['softner'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['3mmSocks'] ?>&nbspm</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['heel'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['galli'] ?>&nbsppieces</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['kachchaSolutionForClosing'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['pakkaSolutionForClosing'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2">
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
							<div class="col-xs-4 col-xs-offset-3">
								<center>
									<p style="font-size: 20px;"><?php echo $row['solutionForMoulding'] ?>&nbsplitres</p>
								</center>
							</div>
							<div class="col-xs-2">
								<form method="POST" action="resetindividual_script.php">
									<button class="btn btn-outline-danger" value="solutionForMoulding" name="column">Reset</button>
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
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="alert alert-danger" role="alert">
					<ol style="margin-left: 5px;">
						<?php
						if ($row['dal'] <= 0.2) {
						?>
							<li style="font-size: 20px;">
								You need to buy Dal.
							</li>
						<?php
						}
						?>
						<?php
						if ($row['rice'] <= 0.2) {
						?>
							<li style="font-size: 20px;">
								You need to buy Rice.
							</li>
						<?php
						}
						?>
						<?php
						if ($row['salt'] <= 0.2) {
						?>
							<li style="font-size: 20px;">
								You need to buy Salt.
							</li>
						<?php
						}
						?>
						<?php
						if ($row['pepper'] <= 0.2) {
						?>
							<li style="font-size: 20px;">
								You need to buy Pepper.
							</li>
						<?php
						}
						?>
					</ol>
				</div>
			</div>
		</div>
		<br>
		<?php
		include '../includes/footer.php';
		session_destroy();
		?>
	</center>
</body>

</html>

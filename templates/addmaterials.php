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
	<title>Add New Material</title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
	<?php
	include '../includes/header.php';
	?>
	<br><br>
	<div class="row">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading" style="background: white; color: black;">
					<p style="text-align: center; font-size: 30px">Add The Materials</p>
				</div>
				<div class="panel-body">
					<form method="POST" action="addmaterials_script.php">
						<b style="font-size: 30px;">Leather Football Grain:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="leatherFootballGrain" class="form-control" value=0 placeholder="Enter in deci-meter">
						</div>
						<b style="font-size: 30px;">Leather Lining Split CG:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="leatherLiningSplitCG" class="form-control" value=0 placeholder="Enter in deci-meter.">
						</div>
						<b style="font-size: 30px;">CG Thoker Grain:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="CGThokerGrain" class="form-control" value=0 placeholder="Enter salt in deci-meter.">
						</div>
						<b style="font-size: 30px;">Leather Crust Swead Split:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="leatherCrustSweadSplit" class="form-control" value=0 placeholder="Enter in deci-meter.">
						</div>
						<b style="font-size: 30px;">PU Cloth:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="PUCloth" class="form-control" value=0 placeholder="Enter in meters.">
						</div>
						<b style="font-size: 30px;">Lycra Cloth With 3mm Foam:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="lycraClothWith3mmFoam" class="form-control" value=0 placeholder="Enter in meters.">
						</div>
						<b style="font-size: 30px;">Liberty Cloth With 3mm Foam:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="libertyClothWith3mmFoam" class="form-control" value=0 placeholder="Enter in meters.">
						</div>
						<b style="font-size: 30px;">8mm Foam for Counter:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="8mmFoamForCounter" class="form-control" value=0 placeholder="Enter number of sheets.">
						</div>
						<b style="font-size: 30px;">15mm Foam for Collar Band:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="15mmFoamForCollarBand" class="form-control" value=0 placeholder="Enter number of sheets.">
						</div>
						<b style="font-size: 30px;">1 inch Halter Nivaad:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="1inchHalterNivaad" class="form-control" value=0 placeholder="Enter in KGs.">
						</div>
						<b style="font-size: 30px;">2 inch Nivaad W:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="2inchNivaadW" class="form-control" value=0 placeholder="Enter in KGs.">
						</div>
						<b style="font-size: 30px;">19mm Tung Binding:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="19mmTungBinding" class="form-control" value=0 placeholder="Enter in KGs.">
						</div>
						<b style="font-size: 30px;">600mm Eyelet:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="600mmEyelet" class="form-control" value=0 placeholder="Enter number of pieces.">
						</div>
						<b style="font-size: 30px;">Hook:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="hook" class="form-control" value=0 placeholder="Enter number of pieces.">
						</div>
						<b style="font-size: 30px;">7mm Jam Button:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="7mmJamButton" class="form-control" value=0 placeholder="Enter number of pieces.">
						</div>
						<b style="font-size: 30px;">150 cm Shoe Lace:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="150cmShoeLace" class="form-control" value=0 placeholder="Enter number of pieces.">
						</div>
						<b style="font-size: 30px;">1.8mm TP Sheet:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="1_8mmTPSheet" class="form-control" value=0 placeholder="Enter number of sheets.">
						</div>
						<b style="font-size: 30px;">3.5mm Leather Board Banwar:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="3_5mmLeatherBoardBanwar" class="form-control" value=0 placeholder="Enter number of sheets.">
						</div>
						<b style="font-size: 30px;">13mm Tingle:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="13mmTingle" class="form-control" value=0 placeholder="Enter number of sheets.">
						</div>
						<b style="font-size: 30px;">Softner:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="softner" class="form-control" value=0 placeholder="Enter in litres.">
						</div>
						<b style="font-size: 30px;">3mm Socks:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="3mmSocks" class="form-control" value=0 placeholder="Enter in metres.">
						</div>
						<b style="font-size: 30px;">Heel:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="heel" class="form-control" value=0 placeholder="Enter.">
						</div>
						<b style="font-size: 30px;">Galli:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="galli" class="form-control" value=0 placeholder="Enter.">
						</div>
						<b style="font-size: 30px;">Kachcha Solution for Closing:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="kachchaSolutionForClosing" class="form-control" value=0 placeholder="Enter in litres.">
						</div>
						<b style="font-size: 30px;">Pakka Solution for Closing:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="pakkaSolutionForClosing" class="form-control" value=0 placeholder="Enter in litres.">
						</div>
						<b style="font-size: 30px;">Solution for Moulding:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="solutionForMoulding" class="form-control" value=0 placeholder="Enter in litres.">
						</div>
						<b style="font-size: 30px;">100cm Shoe Lace:</b>
						<div class="form-group">
							<input style="font-size: 20px;" type="text" name="100cmShoeLace" class="form-control" value=0 placeholder="Enter number of pieces.">
						</div>
						<button class="btn btn-default btn-block" style="color: white; background: #1e6f72; font-size: 30px;">Update</button><br>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<?php
	include '../includes/footer.php';
	session_destroy();
	?>
</body>

</html>

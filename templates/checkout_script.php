<?php
require '../includes/common.php';
session_start();
$type = mysqli_real_escape_string($con, $_POST['type']);
$pairs = mysqli_real_escape_string($con, $_POST['shoes']);
$checkout_q = "SELECT * FROM rawmaterial WHERE id = 1";
$checkout_q_res = mysqli_query($con, $checkout_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($checkout_q_res);
if ($type == "DVS Boot or Tactical Shoe") {
  $leatherFootballGrain = $row['leatherFootballGrain'] - 21 * $pairs;
  $leatherLiningSplitCG = $row['leatherLiningSplitCG'] - 3 * $pairs;
  $CGThokerGrain = $row['CGThokerGrain'] - 4 * $pairs;
  $leatherCrustSweadSplit = $row['leatherCrustSweadSplit'] - 14 * $pairs;
  $PUCloth = $row['PUCloth'] - 0.1538 * $pairs;
  $lycraClothWith3mmFoam = $row['lycraClothWith3mmFoam'] - 0.1 * $pairs;
  $libertyClothWith3mmFoam = $row['libertyClothWith3mmFoam'] - 0.1111 * $pairs;
  $_8mmFoamForCounter = $row['8mmFoamForCounter'] - 0.0454 * $pairs;
  $_15mmFoamForCollarBand = $row['15mmFoamForCollarBand'] - 0.01 * $pairs;
  $_1inchHalterNivaad = $row['1inchHalterNivaad'] - 0.5 * $pairs;
  $_2inchNivaadW = $row['2inchNivaadW'] - 0.5 * $pairs;
  $_19mmTungBinding = $row['19mmTungBinding'] - 0.5 * $pairs;
  $_600mmEyelet = $row['600mmEyelet'] - 20 * $pairs;
  $hook = $row['hook'] - 16 * $pairs;
  $_7mmJamButton = $row['7mmJamButton'] - 4 * $pairs;
  $_150cmShoeLace = $row['150cmShoeLace'] - 1 * $pairs;
  $_1_8mmTPSheet = $row['1.8mmTPSheet'] - 0.0181 * $pairs;
  $_3_5mmLeatherBoardBanwar = $row['3.5mmLeatherBoardBanwar'] - 0.05 * $pairs;
  $_13mmTingle = $row['13mmTingle'] - 0.04 * $pairs;
  $softner = $row['softner'] - 0.05555 * $pairs;
  $_3mmSocks = $row['3mmSocks'] - 0.03571 * $pairs;
  $heel = $row['heel'] - 0.5 * $pairs;
  $galli = $row['galli'] - 0.5 * $pairs;
  $kachchaSolutionForClosing = $row['kachchaSolutionForClosing'] - 0.5 * $pairs;
  $pakkaSolutionForClosing = $row['pakkaSolutionForClosing'] - 0.5 * $pairs;
  $solutionForMoulding = $row['solutionForMoulding'] - 0.5 * $pairs;
  $paperBandAndTag = $row['paperBandAndTag'] - 2 * $pairs;
  $polyetheneBag = $row['polyetheneBag'] - 1 * $pairs;
  $polyetheneBagWhite = $row['polyetheneBagWhite'] - 0.0277777 * $pairs;
  $carton = $row['carton'] - 0.025 * $pairs;
  $jhall = $row['jhall'] - 0.025 * $pairs;
  $update_q = "UPDATE `rawmaterial` SET `leatherFootballGrain` = '$leatherFootballGrain', `leatherLiningSplitCG` =
'$leatherLiningSplitCG', `CGThokerGRain` = '$CGThokerGrain', `leatherCrustSweadSplit` = '$leatherCrustSweadSplit', `PUCloth` =
'$PUCloth', `lycraClothWith3mmFoam` = '$lycraClothWith3mmFoam', `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam',
`8mmFoamForCounter` = '$_8mmFoamForCounter', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1inchHalterNivaad` =
'$_1inchHalterNivaad', `2inchNivaadW` = '$_2inchNivaadW', `19mmTungBinding` = '$_19mmTungBinding', `600mmEyelet` =
'$_600mmEyelet', `hook` = '$hook', `7mmJamButton` = '$_7mmJamButton', `150cmShoeLace` = '$_150cmShoeLace', `1.8mmTPSheet` =
'$_1_8mmTPSheet', `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `paperBandAndTag` =
'$paperBandAndTag', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` = '$polyetheneBagWhite', `carton` = '$carton',
`jhall` = '$jhall'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));
} else if ($type == "DMS Boot") {
  $leatherFootballGrain = $row['leatherFootballGrain'] - 35 * $pairs;
  $libertyClothWith3mmFoam = $row['libertyClothWith3mmFoam'] - 0.06666 * $pairs;
  $_15mmFoamForCollarBand = $row['15mmFoamForCollarBand'] - 0.006666 * $pairs;
  $_100cmShoeLace = $row['100cmShoeLace'] - 1 * $pairs;
  $_1_8mmTPSheet = $row['1.8mmTPSheet'] - 0.01666 * $pairs;
  $_3_5mmLeatherBoardBanwar = $row['3.5mmLeatherBoardBanwar'] - 0.05 * $pairs;
  $_13mmTingle = $row['13mmTingle'] - 0.04 * $pairs;
  $softner = $row['softner'] - 0.05555 * $pairs;
  $_3mmSocks = $row['3mmSocks'] - 0.03571 * $pairs;
  $heel = $row['heel'] - 0.5 * $pairs;
  $galli = $row['galli'] - 0.5 * $pairs;
  $kachchaSolutionForClosing = $row['kachchaSolutionForClosing'] - 0.5 * $pairs;
  $pakkaSolutionForClosing = $row['pakkaSolutionForClosing'] - 0.5 * $pairs;
  $solutionForMoulding = $row['solutionForMoulding'] - 0.5 * $pairs;
  $_150cmShoeLace = $row['150cmShoeLace'];
  $paperBandAndTag = $row['paperBandAndTag'] - 2 * $pairs;
  $polyetheneBag = $row['polyetheneBag'] - 1 * $pairs;
  $polyetheneBagWhite = $row['polyetheneBagWhite'] - 0.0277777 * $pairs;
  $carton = $row['carton'] - 0.025 * $pairs;
  $jhall = $row['jhall'] - 0.025 * $pairs;
  $update_q = "UPDATE `rawmaterial` SET `leatherFootballGrain` = '$leatherFootballGrain', `libertyClothWith3mmFoam` =
  '$libertyClothWith3mmFoam', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1.8mmTPSheet` = '$_1_8mmTPSheet',
  `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `100cmShoeLace` =
'$_100cmShoeLace', `paperBandAndTag` = '$paperBandAndTag', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` =
'$polyetheneBagWhite', `carton` = '$carton', `jhall` = '$jhall'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));
}
$_SESSION["message"] = "Your shoes have been checked out.";
echo ("<script>location.href='viewmaterials.php'</script>");

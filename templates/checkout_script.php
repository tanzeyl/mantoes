<?php
require '../includes/common.php';
session_start();
$type = mysqli_real_escape_string($con, $_POST['type']);
$pairs = mysqli_real_escape_string($con, $_POST['shoes']);
$checkout_q1 = "SELECT * FROM stock WHERE id = 1";
$checkout_q_res1 = mysqli_query($con, $checkout_q1) or die(mysqli_error($con));
$row1 = mysqli_fetch_array($checkout_q_res1);

if ($type == "DVS Boot or Tactical Shoe") {
  $leatherFootballGrain = 21 * $pairs;
  $leatherLiningSplitCG = 3 * $pairs;
  $CGThokerGrain = 4 * $pairs;
  $leatherCrustSweadSplit = 14 * $pairs;
  $PUCloth = 0.1538 * $pairs;
  $lycraClothWith3mmFoam = 0.1 * $pairs;
  $libertyClothWith3mmFoam = 0.1111 * $pairs;
  $_8mmFoamForCounter = 0.0454 * $pairs;
  $_15mmFoamForCollarBand = 0.01 * $pairs;
  $_1inchHalterNivaad = 0.02 * $pairs;
  $_2inchNivaadW = 0.02 * $pairs;
  $_19mmTungBinding = 0.01 * $pairs;
  $_600mmEyelet = 20 * $pairs;
  $hook = 16 * $pairs;
  $_7mmJamButton = 4 * $pairs;
  $_150cmShoeLace = 1 * $pairs;
  $_1_8mmTPSheet = 0.0181 * $pairs;
  $_3_5mmLeatherBoardBanwar = 0.05 * $pairs;
  $_13mmTingle = 0.04 * $pairs;
  $softner = 0.05555 * $pairs;
  $_3mmSocks = 0.03571 * $pairs;
  $heel = 1 * $pairs;
  $galli = 1 * $pairs;
  $kachchaSolutionForClosing = 0.04333 * $pairs;
  $pakkaSolutionForClosing = 0.05 * $pairs;
  $solutionForMoulding = 0.02857 * $pairs;
  $polyetheneBag = 1 * $pairs;
  $polyetheneBagWhite = 0.0277777 * $pairs;
  $carton = 0.025 * $pairs;
  $jhall = 0.025 * $pairs;
  $sideRubberSticker = 2 * $pairs;
  $heelRubberSticker = 2 * $pairs;
  $tungClothSticker = 2 * $pairs;
  $paperBand = 2 * $pairs;
  $paperTag = 1 * $pairs;
  $update_q = "UPDATE `used` SET `leatherFootballGrain` = '$leatherFootballGrain', `leatherLiningSplitCG` =
'$leatherLiningSplitCG', `CGThokerGRain` = '$CGThokerGrain', `leatherCrustSweadSplit` = '$leatherCrustSweadSplit', `PUCloth` =
'$PUCloth', `lycraClothWith3mmFoam` = '$lycraClothWith3mmFoam', `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam',
`8mmFoamForCounter` = '$_8mmFoamForCounter', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1inchHalterNivaad` =
'$_1inchHalterNivaad', `2inchNivaadW` = '$_2inchNivaadW', `19mmTungBinding` = '$_19mmTungBinding', `600mmEyelet` =
'$_600mmEyelet', `hook` = '$hook', `7mmJamButton` = '$_7mmJamButton', `150cmShoeLace` = '$_150cmShoeLace', `1.8mmTPSheet` =
'$_1_8mmTPSheet', `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` = '$polyetheneBagWhite', `carton` = '$carton',
`jhall` = '$jhall', `pairs` = '$pairs', `sideRubberSticker` = '$sideRubberSticker', `heelRubberSticker` = '$heelRubberSticker',
`tungClothSticker` = '$tungClothSticker', `paperBand` = '$paperBand', `paperTag` = '$paperTag', `type` = '$type'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));

  $leatherFootballGrain = $row1["leatherFootballGrain"] - $leatherFootballGrain;
  $leatherLiningSplitCG = $row1["leatherLiningSplitCG"] - $leatherLiningSplitCG;
  $CGThokerGrain = $row1["CGThokerGrain"] - $CGThokerGrain;
  $leatherCrustSweadSplit = $row1["leatherCrustSweadSplit"] - $leatherCrustSweadSplit;
  $PUCloth = $row1["PUCloth"] - $PUCloth;
  $lycraClothWith3mmFoam = $row1["lycraClothWith3mmFoam"] - $lycraClothWith3mmFoam;
  $libertyClothWith3mmFoam = $row1["libertyClothWith3mmFoam"] - $libertyClothWith3mmFoam;
  $_8mmFoamForCounter = $row1["8mmFoamForCounter"] - $_8mmFoamForCounter;
  $_15mmFoamForCollarBand = $row1["15mmFoamForCollarBand"] - $_15mmFoamForCollarBand;
  $_1inchHalterNivaad = $row1["1inchHalterNivaad"] - $_1inchHalterNivaad;
  $_2inchNivaadW = $row1["2inchNivaadW"] - $_2inchNivaadW;
  $_19mmTungBinding = $row1["19mmTungBinding"] - $_19mmTungBinding;
  $_600mmEyelet = $row1["600mmEyelet"] - $_600mmEyelet;
  $hook = $row1["hook"] - $hook;
  $_7mmJamButton = $row1["7mmJamButton"] - $_7mmJamButton;
  $_150cmShoeLace = $row1["150cmShoeLace"] - $_150cmShoeLace;
  $_1_8mmTPSheet = $row1["1.8mmTPSheet"] - $_1_8mmTPSheet;
  $_3_5mmLeatherBoardBanwar = $row1["3.5mmLeatherBoardBanwar"] - $_3_5mmLeatherBoardBanwar;
  $_13mmTingle = $row1["13mmTingle"] - $_13mmTingle;
  $softner = $row1["softner"] - $softner;
  $_3mmSocks = $row1["3mmSocks"] - $_3mmSocks;
  $heel = $row1["heel"] - $heel;
  $galli = $row1["galli"] - $galli;
  $kachchaSolutionForClosing = $row1["kachchaSolutionForClosing"] - $kachchaSolutionForClosing;
  $pakkaSolutionForClosing = $row1["pakkaSolutionForClosing"] - $pakkaSolutionForClosing;
  $solutionForMoulding = $row1["solutionForMoulding"] - $solutionForMoulding;
  $polyetheneBag = $row1["polyetheneBag"] - $polyetheneBag;
  $polyetheneBagWhite = $row1["polyetheneBagWhite"] - $polyetheneBagWhite;
  $carton = $row1["carton"] - $carton;
  $jhall = $row1["jhall"] - $jhall;
  $sideRubberSticker = $row1["sideRubberSticker"] - $sideRubberSticker;
  $heelRubberSticker = $row1["heelRubberSticker"] - $heelRubberSticker;
  $tungClothSticker = $row1["tungClothSticker"] - $tungClothSticker;
  $paperBand = $row1["paperBand"] - $paperBand;
  $paperTag = $row1["paperTag"] - $paperTag;

  $update_q = "UPDATE `stock` SET `leatherFootballGrain` = '$leatherFootballGrain', `leatherLiningSplitCG` =
'$leatherLiningSplitCG', `CGThokerGRain` = '$CGThokerGrain', `leatherCrustSweadSplit` = '$leatherCrustSweadSplit', `PUCloth` =
'$PUCloth', `lycraClothWith3mmFoam` = '$lycraClothWith3mmFoam', `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam',
`8mmFoamForCounter` = '$_8mmFoamForCounter', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1inchHalterNivaad` =
'$_1inchHalterNivaad', `2inchNivaadW` = '$_2inchNivaadW', `19mmTungBinding` = '$_19mmTungBinding', `600mmEyelet` =
'$_600mmEyelet', `hook` = '$hook', `7mmJamButton` = '$_7mmJamButton', `150cmShoeLace` = '$_150cmShoeLace', `1.8mmTPSheet` =
'$_1_8mmTPSheet', `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` = '$polyetheneBagWhite', `carton` = '$carton',
`jhall` = '$jhall', `pairs` = '$pairs', `sideRubberSticker` = '$sideRubberSticker', `heelRubberSticker` = '$heelRubberSticker',
`tungClothSticker` = '$tungClothSticker', `paperBand` = '$paperBand', `paperTag` = '$paperTag'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));
} else if ($type == "DMS Boot") {
  $leatherFootballGrain = 35 * $pairs;
  $libertyClothWith3mmFoam = 0.06666 * $pairs;
  $_15mmFoamForCollarBand = 0.006666 * $pairs;
  $_100cmShoeLace = 1 * $pairs;
  $_1_8mmTPSheet = 0.01666 * $pairs;
  $_3_5mmLeatherBoardBanwar = 0.05 * $pairs;
  $_13mmTingle = 0.04 * $pairs;
  $softner = 0.05555 * $pairs;
  $_3mmSocks = 0.03571 * $pairs;
  $heel = 1 * $pairs;
  $galli = 1 * $pairs;
  $kachchaSolutionForClosing = 0.04333 * $pairs;
  $pakkaSolutionForClosing = 0.04 * $pairs;
  $solutionForMoulding = 0.02857 * $pairs;
  $polyetheneBag = 1 * $pairs;
  $polyetheneBagWhite = 0.0277777 * $pairs;
  $carton = 0.025 * $pairs;
  $jhall = 0.025 * $pairs;
  $sideRubberSticker = 2 * $pairs;
  $heelRubberSticker = 2 * $pairs;
  $tungClothSticker = 2 * $pairs;
  $paperBand = 2 * $pairs;
  $paperTag = 1 * $pairs;
  $update_q = "UPDATE `used` SET `leatherFootballGrain` = '$leatherFootballGrain', `leatherLiningSplitCG` =
'0', `CGThokerGRain` = '0', `leatherCrustSweadSplit` = '0', `PUCloth` =
'0', `lycraClothWith3mmFoam` = '0', `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam',
`8mmFoamForCounter` = '0', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1inchHalterNivaad` =
'0', `2inchNivaadW` = '0', `19mmTungBinding` = '0', `600mmEyelet` =
'0', `hook` = '0', `7mmJamButton` = '0', `150cmShoeLace` = '0', `1.8mmTPSheet` =
'$_1_8mmTPSheet', `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` = '$polyetheneBagWhite', `carton` = '$carton',
`jhall` = '$jhall', `pairs` = '$pairs', `sideRubberSticker` = '$sideRubberSticker', `heelRubberSticker` = '$heelRubberSticker',
`tungClothSticker` = '$tungClothSticker', `paperBand` = '$paperBand', `paperTag` = '$paperTag', `type` = '$type'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));

  $leatherFootballGrain = $row1["leatherFootballGrain"] - $leatherFootballGrain;
  $libertyClothWith3mmFoam = $row1["libertyClothWith3mmFoam"] - $libertyClothWith3mmFoam;
  $_15mmFoamForCollarBand = $row1["15mmFoamForCollarBand"] - $_15mmFoamForCollarBand;
  $_100cmShoeLace = $row1["100cmShoeLace"] - $_100cmShoeLace;
  $_1_8mmTPSheet = $row1["1.8mmTPSheet"] - $_1_8mmTPSheet;
  $_3_5mmLeatherBoardBanwar = $row1["3.5mmLeatherBoardBanwar"] - $_3_5mmLeatherBoardBanwar;
  $_13mmTingle = $row1["13mmTingle"] - $_13mmTingle;
  $softner = $row1["softner"] - $softner;
  $_3mmSocks = $row1["3mmSocks"] - $_3mmSocks;
  $heel = $row1["heel"] - $heel;
  $galli = $row1["galli"] - $galli;
  $kachchaSolutionForClosing = $row1["kachchaSolutionForClosing"] - $kachchaSolutionForClosing;
  $pakkaSolutionForClosing = $row1["pakkaSolutionForClosing"] - $pakkaSolutionForClosing;
  $solutionForMoulding = $row1["solutionForMoulding"] - $solutionForMoulding;
  $polyetheneBag = $row1["polyetheneBag"] - $polyetheneBag;
  $polyetheneBagWhite = $row1["polyetheneBagWhite"] - $polyetheneBagWhite;
  $carton = $row1["carton"] - $carton;
  $jhall = $row1["jhall"] - $jhall;
  $sideRubberSticker = $row1["sideRubberSticker"] - $sideRubberSticker;
  $heelRubberSticker = $row1["heelRubberSticker"] - $heelRubberSticker;
  $tungClothSticker = $row1["tungClothSticker"] - $tungClothSticker;
  $paperBand = $row1["paperBand"] - $paperBand;
  $paperTag = $row1["paperTag"] - $paperTag;

  $update_q = "UPDATE `stock` SET `leatherFootballGrain` = '$leatherFootballGrain', `libertyClothWith3mmFoam` =
  '$libertyClothWith3mmFoam', `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand', `1.8mmTPSheet` = '$_1_8mmTPSheet',
  `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `100cmShoeLace` =
'$_100cmShoeLace', `polyetheneBag` = '$polyetheneBag', `polyetheneBagWhite` =
'$polyetheneBagWhite', `carton` = '$carton', `jhall` = '$jhall', `pairs` = '$pairs', `sideRubberSticker` = '$sideRubberSticker',
`heelRubberSticker` = '$heelRubberSticker', `tungClothSticker` = '$tungClothSticker', `paperBand` = '$paperBand', `paperTag` =
'$paperTag'";
  $update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));
}

$_SESSION["message"] = "Your shoes have been checked out.";

echo ("<script>location.href='prices.php'</script>");

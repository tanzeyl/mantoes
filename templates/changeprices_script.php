<?php
require '../includes/common.php';
session_start();
if (mysqli_real_escape_string($con, $_POST['leatherFootballGrain'])) {
  $leatherFootballGrain = mysqli_real_escape_string($con, $_POST['leatherFootballGrain']);
  $updatePrice_q = "UPDATE `prices` SET `leatherFootballGrain` = '$leatherFootballGrain'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['leatherLiningSplitCG'])) {
  $leatherLiningSplitCG = mysqli_real_escape_string($con, $_POST['leatherLiningSplitCG']);
  $updatePrice_q = "UPDATE `prices` SET `leatherLiningSplitCG` = '$leatherLiningSplitCG'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['CGThokerGrain'])) {
  $CGThokerGrain = mysqli_real_escape_string($con, $_POST['CGThokerGrain']);
  $updatePrice_q = "UPDATE `prices` SET `CGThokerGrain` = '$CGThokerGrain'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['leatherCrustSweadSplit'])) {
  $leatherCrustSweadSplit = mysqli_real_escape_string($con, $_POST['leatherCrustSweadSplit']);
  $updatePrice_q = "UPDATE `prices` SET `leatherCrustSweadSplit` = '$leatherCrustSweadSplit'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['PUCloth'])) {
  $PUCloth = mysqli_real_escape_string($con, $_POST['PUCloth']);
  $updatePrice_q = "UPDATE `prices` SET `PUCloth` = '$PUCloth'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['lycraClothWith3mmFoam'])) {
  $lycraClothWith3mmFoam = mysqli_real_escape_string($con, $_POST['lycraClothWith3mmFoam']);
  $updatePrice_q = "UPDATE `prices` SET `lycraClothWith3mmFoam` = '$lycraClothWith3mmFoam'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['libertyClothWith3mmFoam'])) {
  $libertyClothWith3mmFoam = mysqli_real_escape_string($con, $_POST['libertyClothWith3mmFoam']);
  $updatePrice_q = "UPDATE `prices` SET `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['8mmFoamForCounter'])) {
  $_8mmFoamForCounter = mysqli_real_escape_string($con, $_POST['8mmFoamForCounter']);
  $updatePrice_q = "UPDATE `prices` SET `8mmFoamForCounter` = '$_8mmFoamForCounter'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['15mmFoamForCollarBand'])) {
  $_15mmFoamForCollarBand = mysqli_real_escape_string($con, $_POST['15mmFoamForCollarBand']);
  $updatePrice_q = "UPDATE `prices` SET `15mmFoamForCollarBand` = '$_15mmFoamForCollarBand'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['1inchHalterNivaad'])) {
  $_1inchHalterNivaad = mysqli_real_escape_string($con, $_POST['1inchHalterNivaad']);
  $updatePrice_q = "UPDATE `prices` SET `1inchHalterNivaad` = '$_1inchHalterNivaad'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['2inchNivaadW'])) {
  $_2inchNivaadW = mysqli_real_escape_string($con, $_POST['2inchNivaadW']);
  $updatePrice_q = "UPDATE `prices` SET `2inchNivaadW` = '$_2inchNivaadW'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['19mmTungBinding'])) {
  $_19mmTungBinding = mysqli_real_escape_string($con, $_POST['19mmTungBinding']);
  $updatePrice_q = "UPDATE `prices` SET `19mmTungBinding` = '$_19mmTungBinding'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['600mmEyelet'])) {
  $_600mmEyelet = mysqli_real_escape_string($con, $_POST['600mmEyelet']);
  $updatePrice_q = "UPDATE `prices` SET `600mmEyelet` = '$_600mmEyelet'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['hook'])) {
  $hook = mysqli_real_escape_string($con, $_POST['hook']);
  $updatePrice_q = "UPDATE `prices` SET `hook` = '$hook'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['7mmJamButton'])) {
  $_7mmJamButton = mysqli_real_escape_string($con, $_POST['7mmJamButton']);
  $updatePrice_q = "UPDATE `prices` SET `7mmJamButton` = '$_7mmJamButton'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['150cmShoeLace'])) {
  $_150cmShoeLace = mysqli_real_escape_string($con, $_POST['150cmShoeLace']);
  $updatePrice_q = "UPDATE `prices` SET `150cmShoeLace` = '$_150cmShoeLace'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['1.8mmTPSheet'])) {
  $_1_8mmTPSheet = mysqli_real_escape_string($con, $_POST['1.8mmTPSheet']);
  $updatePrice_q = "UPDATE `prices` SET `1.8mmTPSheet` = '$_1_8mmTPSheet'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['3.5mmLeatherBoardBanwar'])) {
  $_3_5mmLeatherBoardBanwar = mysqli_real_escape_string($con, $_POST['3.5mmLeatherBoardBanwar']);
  $updatePrice_q = "UPDATE `prices` SET `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['13mmTingle'])) {
  $_13mmTingle = mysqli_real_escape_string($con, $_POST['13mmTingle']);
  $updatePrice_q = "UPDATE `prices` SET `13mmTingle` = '$_13mmTingle'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['softner'])) {
  $softner = mysqli_real_escape_string($con, $_POST['softner']);
  $updatePrice_q = "UPDATE `prices` SET `softner` = '$softner'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['3mmSocks'])) {
  $_3mmSocks = mysqli_real_escape_string($con, $_POST['3mmSocks']);
  $updatePrice_q = "UPDATE `prices` SET `3mmSocks` = '$_3mmSocks'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['heel'])) {
  $heel = mysqli_real_escape_string($con, $_POST['heel']);
  $updatePrice_q = "UPDATE `prices` SET `heel` = '$heel'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['galli'])) {
  $galli = mysqli_real_escape_string($con, $_POST['galli']);
  $updatePrice_q = "UPDATE `prices` SET `galli` = '$galli'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['kachchaSolutionForClosing'])) {
  $kachchaSolutionForClosing = mysqli_real_escape_string($con, $_POST['kachchaSolutionForClosing']);
  $updatePrice_q = "UPDATE `prices` SET `kachchaSolutionForClosing` = '$kachchaSolutionForClosing'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['pakkaSolutionForClosing'])) {
  $pakkaSolutionForClosing = mysqli_real_escape_string($con, $_POST['pakkaSolutionForClosing']);
  $updatePrice_q = "UPDATE `prices` SET `pakkaSolutionForClosing` = '$pakkaSolutionForClosing'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['solutionForMoulding'])) {
  $solutionForMoulding = mysqli_real_escape_string($con, $_POST['solutionForMoulding']);
  $updatePrice_q = "UPDATE `prices` SET `solutionForMoulding` = '$solutionForMoulding'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['100cmShoeLace'])) {
  $_100cmShoeLace = mysqli_real_escape_string($con, $_POST['100cmShoeLace']);
  $updatePrice_q = "UPDATE `prices` SET `100cmShoeLace` = '$_100cmShoeLace'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['polyetheneBag'])) {
  $polyetheneBag = mysqli_real_escape_string($con, $_POST['polyetheneBag']);
  $updatePrice_q = "UPDATE `prices` SET `polyetheneBag` = '$polyetheneBag'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['polyetheneBagWhite'])) {
  $polyetheneBagWhite = mysqli_real_escape_string($con, $_POST['polyetheneBagWhite']);
  $updatePrice_q = "UPDATE `prices` SET `polyetheneBagWhite` = '$polyetheneBagWhite'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['carton'])) {
  $carton = mysqli_real_escape_string($con, $_POST['carton']);
  $updatePrice_q = "UPDATE `prices` SET `carton` = '$carton'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['jhall'])) {
  $jhall = mysqli_real_escape_string($con, $_POST['jhall']);
  $updatePrice_q = "UPDATE `prices` SET `jhall` = '$jhall'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['sideRubberSticker'])) {
  $sideRubberSticker = mysqli_real_escape_string($con, $_POST['sideRubberSticker']);
  $updatePrice_q = "UPDATE `prices` SET `sideRubberSticker` = '$sideRubberSticker'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['hellRubberSticker'])) {
  $hellRubberSticker = mysqli_real_escape_string($con, $_POST['hellRubberSticker']);
  $updatePrice_q = "UPDATE `prices` SET `hellRubberSticker` = '$hellRubberSticker'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['tungClothSticker'])) {
  $tungClothSticker = mysqli_real_escape_string($con, $_POST['tungClothSticker']);
  $updatePrice_q = "UPDATE `prices` SET `tungClothSticker` = '$tungClothSticker'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['paperBand'])) {
  $paperBand = mysqli_real_escape_string($con, $_POST['paperBand']);
  $updatePrice_q = "UPDATE `prices` SET `paperBand` = '$paperBand'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
if (mysqli_real_escape_string($con, $_POST['paperTag'])) {
  $paperTag = mysqli_real_escape_string($con, $_POST['paperTag']);
  $updatePrice_q = "UPDATE `prices` SET `paperTag` = '$paperTag'";
  $update_q_res = mysqli_query($con, $updatePrice_q) or die(mysqli_error($con));
}
//echo ("<script>location.href='change_prices.php'</script>");

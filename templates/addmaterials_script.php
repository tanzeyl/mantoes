<?php
require '../includes/common.php';
session_start();

$leatherFootballGrain = mysqli_real_escape_string($con, $_POST['leatherFootballGrain']);
$leatherLiningSplitCG = mysqli_real_escape_string($con, $_POST['leatherLiningSplitCG']);
$CGThokerGrain = mysqli_real_escape_string($con, $_POST['CGThokerGrain']);
$leatherCrustSweadSplit = mysqli_real_escape_string($con, $_POST['leatherCrustSweadSplit']);
$PUCloth = mysqli_real_escape_string($con, $_POST['PUCloth']);
$lycraClothWith3mmFoam = mysqli_real_escape_string($con, $_POST['lycraClothWith3mmFoam']);
$libertyClothWith3mmFoam = mysqli_real_escape_string($con, $_POST['libertyClothWith3mmFoam']);
$_8mmFoamForCounter = mysqli_real_escape_string($con, $_POST['8mmFoamForCounter']);
$_8mmFoamForCollarBand = mysqli_real_escape_string($con, $_POST['8mmFoamForCollarBand']);
$_1inchHalterNivaad = mysqli_real_escape_string($con, $_POST['1inchHalterNivaad']);
$_2inchNivaadW = mysqli_real_escape_string($con, $_POST['2inchNivaadW']);
$_19mmTungBinding = mysqli_real_escape_string($con, $_POST['19mmTungBinding']);
$_600mmEyelet = mysqli_real_escape_string($con, $_POST['600mmEyelet']);
$hook = mysqli_real_escape_string($con, $_POST['hook']);
$_7mmJamButton = mysqli_real_escape_string($con, $_POST['7mmJamButton']);
$_150cmShoeLace = mysqli_real_escape_string($con, $_POST['150cmShoeLace']);
$_1_8mmTPSheet = mysqli_real_escape_string($con, $_POST['1_8mmTPSheet']);
$_3_5mmLeatherBoardBanwar = mysqli_real_escape_string($con, $_POST['3_5mmLeatherBoardBanwar']);
$_13mmTingle = mysqli_real_escape_string($con, $_POST['13mmTingle']);
$softner = mysqli_real_escape_string($con, $_POST['softner']);
$_3mmSocks = mysqli_real_escape_string($con, $_POST['3mmSocks']);
$heel = mysqli_real_escape_string($con, $_POST['heel']);
$galli = mysqli_real_escape_string($con, $_POST['galli']);
$kachchaSolutionForClosing = mysqli_real_escape_string($con, $_POST['kachchaSolutionForClosing']);
$pakkaSolutionForClosing = mysqli_real_escape_string($con, $_POST['pakkaSolutionForClosing']);
$solutionForMoulding = mysqli_real_escape_string($con, $_POST['solutionForMoulding']);
$_100cmShoeLace = mysqli_real_escape_string($con, $_POST['100cmShoeLace']);

$material_q = "SELECT * FROM rawmaterial WHERE id = 1";
$material_q_res = mysqli_query($con, $material_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($material_q_res);

$leatherFootballGrain = $row['leatherFootballGrain'] + $leatherFootballGrain;
$leatherLiningSplitCG = $row['leatherLiningSplitCG'] + $leatherLiningSplitCG;
$CGThokerGrain = $row['CGThokerGrain'] + $CGThokerGrain;
$leatherCrustSweadSplit = $row['leatherCrustSweadSplit'] + $leatherCrustSweadSplit;
$PUCloth = $row['PUCloth'] + $PUCloth;
$lycraClothWith3mmFoam = $row['lycraClothWith3mmFoam'] + $lycraClothWith3mmFoam;
$libertyClothWith3mmFoam = $row['libertyClothWith3mmFoam'] + $libertyClothWith3mmFoam;
$_8mmFoamForCounter = $row['8mmFoamForCounter'] + $_8mmFoamForCounter;
$_8mmFoamForCollarBand = $row['8mmFoamForCollarBand'] + $_8mmFoamForCollarBand;
$_1inchHalterNivaad = $row['1inchHalterNivaad'] + $_1inchHalterNivaad;
$_2inchNivaadW = $row['2inchNivaadW'] + $_2inchNivaadW;
$_19mmTungBinding = $row['19mmTungBinding'] + $_19mmTungBinding;
$_600mmEyelet = $row['600mmEyelet'] + $_600mmEyelet;
$hook = $row['hook'] + $hook;
$_7mmJamButton = $row['7mmJamButton'] + $_7mmJamButton;
$_150cmShoeLace = $row['150cmShoeLace'] + $_150cmShoeLace;
$_1_8mmTPSheet = $row['1.8mmTPSheet'] + $_1_8mmTPSheet;
$_3_5mmLeatherBoardBanwar = $row['3.5mmLeatherBoardBanwar'] + $_3_5mmLeatherBoardBanwar;
$_13mmTingle = $row['13mmTingle'] + $_13mmTingle;
$softner = $row['softner'] + $softner;
$_3mmSocks = $row['3mmSocks'] + $_3mmSocks;
$heel = $row['heel'] + $heel;
$galli = $row['galli'] + $galli;
$kachchaSolutionForClosing = $row['kachchaSolutionForClosing'] + $kachchaSolutionForClosing;
$pakkaSolutionForClosing = $row['pakkaSolutionForClosing'] + $pakkaSolutionForClosing;
$solutionForMoulding = $row['solutionForMoulding'] + $solutionForMoulding;
$_100cmShoeLace = $row['100cmShoeLace'] + $_100cmShoeLace;

$add_q = "UPDATE `rawmaterial` SET `leatherFootballGrain` = '$leatherFootballGrain', `leatherLiningSplitCG` =
'$leatherLiningSplitCG', `CGThokerGRain` = '$CGThokerGrain', `leatherCrustSweadSplit` = '$leatherCrustSweadSplit', `PUCloth` =
'$PUCloth', `lycraClothWith3mmFoam` = '$lycraClothWith3mmFoam', `libertyClothWith3mmFoam` = '$libertyClothWith3mmFoam',
`8mmFoamForCounter` = '$_8mmFoamForCounter', `8mmFoamForCollarBand` = '$_8mmFoamForCollarBand', `1inchHalterNivaad` =
'$_1inchHalterNivaad', `2inchNivaadW` = '$_2inchNivaadW', `19mmTungBinding` = '$_19mmTungBinding', `600mmEyelet` =
'$_600mmEyelet', `hook` = '$hook', `7mmJamButton` = '$_7mmJamButton', `150cmShoeLace` = '$_150cmShoeLace', `1.8mmTPSheet` =
'$_1_8mmTPSheet', `3.5mmLeatherBoardBanwar` = '$_3_5mmLeatherBoardBanwar', `13mmTingle` = '$_13mmTingle', `softner` = '$softner',
`3mmSocks` = '$_3mmSocks', `heel` = '$heel', `galli` = '$galli', `kachchaSolutionForClosing` = '$kachchaSolutionForClosing',
`pakkaSolutionForClosing` = '$pakkaSolutionForClosing', `solutionForMoulding` = '$solutionForMoulding', `100cmShoeLace` =
'$_100cmShoeLace'";
$add_q_res = mysqli_query($con, $add_q) or die(mysqli_error($con));
$_SESSION["message"] = "Materials have been updated.";
echo ("<script>location.href='viewmaterials.php'</script>");

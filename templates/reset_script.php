<?php
require '../includes/common.php';
session_start();
$reset_q = "UPDATE `inStock` SET `leatherFootballGrain` = '0', `leatherLiningSplitCG` = '0', `CGThokerGRain` = '0',
`leatherCrustSweadSplit` = '0', `PUCloth` = '0', `lycraClothWith3mmFoam` = '0', `libertyClothWith3mmFoam` = '0',
`8mmFoamForCounter` = '0', `15mmFoamForCollarBand` = '0', `1inchHalterNivaad` = '0', `2inchNivaadW` = '0',
`19mmTungBinding` = '0', `600mmEyelet` = '0', `hook` = '0', `7mmJamButton` = '0', `150cmShoeLace` = '0', `1.8mmTPSheet` ='0',
`3.5mmLeatherBoardBanwar` = '0', `13mmTingle` = '0', `softner` = '0', `3mmSocks` = '0', `heel` = '0', `galli` = '0',
`kachchaSolutionForClosing` = '0',`pakkaSolutionForClosing` = '0', `solutionForMoulding` = '0', `100cmShoeLace` = '0',
`polyetheneBag` = '0', `polyetheneBagWhite` = '0', `carton` = '0', `jhall` = '0', `sideRubberSticker` = '0',
`heelRubberSticker` = '0', `tungClothSticker` = '0', `paperBand` = '0', `paperTag` = '0'";
$reset_q_res = mysqli_query($con, $reset_q) or die(mysqli_error($con));
$reset_q = "UPDATE `stock` SET `leatherFootballGrain` = '0', `leatherLiningSplitCG` = '0', `CGThokerGRain` = '0',
`leatherCrustSweadSplit` = '0', `PUCloth` = '0', `lycraClothWith3mmFoam` = '0', `libertyClothWith3mmFoam` = '0',
`8mmFoamForCounter` = '0', `15mmFoamForCollarBand` = '0', `1inchHalterNivaad` = '0', `2inchNivaadW` = '0',
`19mmTungBinding` = '0', `600mmEyelet` = '0', `hook` = '0', `7mmJamButton` = '0', `150cmShoeLace` = '0', `1.8mmTPSheet` ='0',
`3.5mmLeatherBoardBanwar` = '0', `13mmTingle` = '0', `softner` = '0', `3mmSocks` = '0', `heel` = '0', `galli` = '0',
`kachchaSolutionForClosing` = '0',`pakkaSolutionForClosing` = '0', `solutionForMoulding` = '0', `100cmShoeLace` = '0',
`polyetheneBag` = '0', `polyetheneBagWhite` = '0', `carton` = '0', `jhall` = '0', `sideRubberSticker` = '0',
`heelRubberSticker` = '0', `tungClothSticker` = '0', `paperBand` = '0', `paperTag` = '0'";
$reset_q_res = mysqli_query($con, $reset_q) or die(mysqli_error($con));
$reset_q = "UPDATE `used` SET `leatherFootballGrain` = '0', `leatherLiningSplitCG` = '0', `CGThokerGRain` = '0',
`leatherCrustSweadSplit` = '0', `PUCloth` = '0', `lycraClothWith3mmFoam` = '0', `libertyClothWith3mmFoam` = '0',
`8mmFoamForCounter` = '0', `15mmFoamForCollarBand` = '0', `1inchHalterNivaad` = '0', `2inchNivaadW` = '0',
`19mmTungBinding` = '0', `600mmEyelet` = '0', `hook` = '0', `7mmJamButton` = '0', `150cmShoeLace` = '0', `1.8mmTPSheet` ='0',
`3.5mmLeatherBoardBanwar` = '0', `13mmTingle` = '0', `softner` = '0', `3mmSocks` = '0', `heel` = '0', `galli` = '0',
`kachchaSolutionForClosing` = '0',`pakkaSolutionForClosing` = '0', `solutionForMoulding` = '0', `100cmShoeLace` = '0',
`polyetheneBag` = '0', `polyetheneBagWhite` = '0', `carton` = '0', `jhall` = '0', `sideRubberSticker` = '0',
`heelRubberSticker` = '0', `tungClothSticker` = '0', `paperBand` = '0', `paperTag` = '0'";
$reset_q_res = mysqli_query($con, $reset_q) or die(mysqli_error($con));
$_SESSION["message"] = "Everything has been reset to zero.";
echo ("<script>location.href='viewmaterials.php'</script>");

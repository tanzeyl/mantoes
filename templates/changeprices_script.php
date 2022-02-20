<?php
require '../includes/common.php';
session_start();
if (mysqli_real_escape_string($con, $_POST['leatherFootballGrain'])) {
  $leatherFootballGrain = mysqli_real_escape_string($con, $_POST['leatherFootballGrain']);
}
$_SESSION["message"] = "Your shoes have been checked out.";
//echo ("<script>location.href='viewmaterials.php'</script>");

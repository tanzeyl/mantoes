<?php
require '../includes/common.php';
session_start();
$column = mysqli_real_escape_string($con, $_POST['column']);
$reset_q = "UPDATE `inStock` SET `$column` = '0'";
$reset_q_res = mysqli_query($con, $reset_q) or die(mysqli_error($con));
$_SESSION["message"] = "Selected column has been reset to zero.";
echo ("<script>location.href='viewmaterials.php'</script>");

<?php
require '../includes/common.php';
session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$give = mysqli_real_escape_string($con, $_POST['give']);
$recieve = mysqli_real_escape_string($con, $_POST['recieve']);
$balance = $recieve - $give;
$insert_q = "INSERT INTO `accounts` (`id`, `name`, `balance`, `toGive`, `toTake`) VALUES (NULL, '$name', '$balance', '$give', '$recieve')";
$insert_q_res = mysqli_query($con, $insert_q) or die(mysqli_error($con));
$_SESSION['message'] = "Client successfully added.";
echo ("<script>location.href='accounts.php'</script>");

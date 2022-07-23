<?php
require '../includes/common.php';
session_start();
$id = $_SESSION['id'];
$select_q = "SELECT * FROM `accounts` WHERE id = $id";
$select_q_res = mysqli_query($con, $select_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_q_res);
$recieved = mysqli_real_escape_string($con, $_POST['recieved']);
$given = mysqli_real_escape_string($con, $_POST['given']);
$toTake = $row['toTake'] - $recieved;
$toGive = $row['toGive'] - $given;
$balance = $toTake - $toGive;
$update_q = "UPDATE `accounts` SET `balance` = $balance, `toGive` = $toGive, `toTake` = $toTake WHERE `accounts`.`id` = $id";
$update_q_res = mysqli_query($con, $update_q) or die(mysqli_error($con));
$_SESSION["message"] = "User account has been updated";
session_destroy();
echo ("<script>location.href='accounts.php'</script>");

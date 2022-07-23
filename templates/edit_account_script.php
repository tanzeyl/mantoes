<?php
require '../includes/common.php';
session_start();
$id = mysqli_real_escape_string($con, $_POST['id']);
$fetch_q = "SELECT * from `accounts` WHERE id = $id";
$fetch_q_res = mysqli_query($con, $fetch_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($fetch_q_res);
// $_SESSION["message"] = "Selected column has been reset to zero.";
// echo ("<script>location.href='viewmaterials.php'</script>");
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
  <title><?php echo $row['name'] ?></title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
  <center>
    <?php
    include '../includes/header.php';
    $_SESSION["id"] = $row['id'];
    ?>
    <div class="row" style="border: 10px solid transparent;">
      <div class="col-xs-12 col-md-12">
        <div class="panel panel-default" style="border: 2px solid black;">
          <div class="panel-heading">
            <p style="text-align: center; font-size: 30px">Add new data</p>
          </div>
          <div class="panel-body">
            <form method="POST" action="edit_script.php">
              <b style="font-size: 30px;">Money recieved</b>
              <div class="form-group">
                <input style="font-size: 30px;" type="text" name="recieved" class="form-control" value=0 placeholder="Enter money recieved." required>
              </div>
              <b style="font-size: 30px;">Money given</b>
              <div class="form-group">
                <input style="font-size: 30px;" type="text" name="given" class="form-control" value=0 placeholder="Enter money taken." required>
              </div>
              <button class="btn btn-default btn-block" style="color: white; background: #1e6f72; font-size: 30px;">Update</button><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </center>

</body>

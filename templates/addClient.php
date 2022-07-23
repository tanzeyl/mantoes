<?php
require '../includes/common.php';
session_start();
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
  <title>Add new client</title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
  <?php
  include '../includes/header.php';
  ?>
  <br><br>
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading" style="background: white; color: black;">
          <p style="text-align: center; font-size: 30px">Add the details</p>
        </div>
        <div class="panel-body">
          <form method="POST" action="addClient_script.php">
            <b style="font-size: 30px;">Name:</b>
            <div class="form-group">
              <input style="font-size: 20px;" type="text" name="name" class="form-control" placeholder="Enter the name of client.">
            </div>
            <b style="font-size: 30px;">To send:</b>
            <div class="form-group">
              <input style="font-size: 20px;" type="text" name="give" class="form-control" value=0 placeholder="Enter the amount to give.">
            </div>
            <b style="font-size: 30px;">To recieve:</b>
            <div class="form-group">
              <input style="font-size: 20px;" type="text" name="recieve" class="form-control" value=0 placeholder="Enter the amount to recieve.">
            </div>
            <button class="btn btn-default btn-block" style="color: white; background: #1e6f72; font-size: 30px;">Add</button><br>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <?php
  include '../includes/footer.php';
  session_destroy();
  ?>
</body>

</html>

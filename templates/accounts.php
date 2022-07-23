<?php
require '../includes/common.php';
session_start();
$acc_q = "SELECT * FROM accounts";
$acc_q_res = mysqli_query($con, $acc_q) or die(mysqli_error($con));
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
  <title>All Accounts</title>

  <style>
    * {
      font-size: 20px;
    }

    a {
      margin-left: 2%;
    }
  </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
  <center>
    <?php
    include '../includes/header.php';
    ?>
    <?php
    if (isset($_SESSION['message'])) {
    ?>
      <div class="alert alert-success" role="alert">
        <h2><?php echo $_SESSION['message']; ?></h2>
      </div>
    <?php
    }
    ?>
  </center>
  <table class="table table-bordered table-hover table-sm">
    <tr>
      <th>Serial Number</th>
      <th>Client Name</th>
      <th>To Give</th>
      <th>To Take</th>
      <th>Balance</th>
      <th>Edit</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($acc_q_res)) {
    ?>
      <tr>
        <td>
          <?php echo $row['id'] ?>
        </td>
        <td>
          <?php echo $row['name'] ?>
        </td>
        <td>
          <?php echo $row['toGive'] ?>
        </td>
        <td>
          <?php echo $row['toTake'] ?>
        </td>
        <td>
          <?php echo $row['balance'] ?>
        </td>
        <td>
          <center>
            <form method="POST" action="edit_account_script.php">
              <button class="btn btn-outline-danger" value=<?php echo $row['id'] ?> name="id">Edit</button>
            </form>
          </center>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
  <a href="addClient.php"><button class="btn btn-success" style="font-size: 20px">Add new client</button></a>
</body>

</html>

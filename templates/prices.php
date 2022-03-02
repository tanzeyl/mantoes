<?php
session_start();
require '../includes/common.php';
$prices_q = "SELECT * FROM used WHERE id = 1";
$prices_q_res = mysqli_query($con, $prices_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($prices_q_res);
$pairs = $row["pairs"];
$type = $row["type"];
$total = 0;
$prices_q = "SELECT * FROM prices WHERE id = 1";
$prices_q_res = mysqli_query($con, $prices_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($prices_q_res);
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
  <title>View Available Materials</title>
</head>

<body style="background-color: white; font-family: 'Times New Roman', Times, serif;">
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
    <br>
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-5">
                <center>
                  <p style="text-align: left; font-size: 20px;">Prices</p>
                </center>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <?php
            if ($type == "DVS Boot or Tactical Shoe") {
            ?>
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Leather Football Grain:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 21 * $row["leatherFootballGrain"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Leather Lining Split CG:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 3 * $row["leatherLiningSplitCG"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">CG Thoker Grain:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 4 * $row["CGThokerGrain"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Leather Crust Swead Split:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 14 * $row["leatherCrustSweadSplit"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">PU Cloth:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.1538 * $row["PUCloth"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Lycra Cloth With 3mm Foam:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.1 * $row["lycraClothWith3mmFoam"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Liberty Cloth With 3mm Foam:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.1111 * $row["libertyClothWith3mmFoam"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">8mm Foam For Counter:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.0454 * $row["8mmFoamForCounter"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">15mm Foam For Collar Band:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.01 * $row["15mmFoamForCollarBand"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">1inch Halter Nivaad:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.02 * $row["1inchHalterNivaad"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">2inch Nivaad W:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.02 * $row["2inchNivaadW"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">19mm Tung Binding:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.01 * $row["19mmTungBinding"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">600mm Eyelet:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 20 * $row["600mmEyelet"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Hook:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 16 * $row["hook"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">7mm Jam Button:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 4 * $row["7mmJamButton"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">150cm Shoe Lace:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 1 * $row["150cmShoeLace"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
            <?php
            } else {
            ?>
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Leather Football Grain:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 35 * $row["leatherFootballGrain"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">Liberty Cloth With 3mm Foam:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.06666 * $row["libertyClothWith3mmFoam"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">15mm Foam For Collar Band:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 0.006666 * $row["15mmFoamForCollarBand"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
                <div class="col-xs-6">
                  <b style="font-size: 20px;">100cm Shoe Lace:</b>
                </div>
                <div class="col-xs-6">
                  <?php
                  $sum = $pairs * 1 * $row["100cmShoeLace"];
                  $total = $total + $sum;
                  ?>
                  <center>
                    <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                  </center>
                </div>
              </div>
              <hr style="border: 2px solid black;">
            <?php
            }
            ?>
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">1.8mm TP Sheet:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.0181 * $row["1.8mmTPSheet"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">3.5mm Leather Board Banwar:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.05 * $row["3.5mmLeatherBoardBanwar"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">13mm Tingle:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.04 * $row["13mmTingle"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Softner:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.05555 * $row["softner"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">3mm Socks:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.03571 * $row["3mmSocks"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Heel:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 1 * $row["heel"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Galli:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 1 * $row["galli"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Kachcha Solution For Closing:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.04333 * $row["kachchaSolutionForClosing"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Pakka Solution For Closing:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.05 * $row["pakkaSolutionForClosing"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Solution for Moulding:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.02857 * $row["solutionForMoulding"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Polyethene Bag:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 1 * $row["polyetheneBag"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Polyethene Bag White:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.0277777 * $row["polyetheneBagWhite"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Carton:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.025 * $row["carton"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Jhall:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 0.025 * $row["jhall"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Side Rubber Sticker:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 2 * $row["sideRubberSticker"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Heel Rubber Sticker:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 2 * $row["heelRubberSticker"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Tung Cloth Sticker:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 2 * $row["tungClothSticker"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Paper Band:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 2 * $row["paperBand"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Paper Tag:</b>
              </div>
              <div class="col-xs-6">
                <?php
                $sum = $pairs * 1 * $row["paperTag"];
                $total = $total + $sum;
                ?>
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $sum ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Total Cost:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 20px;">₹<?php echo  $total ?>/-</p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
          </div>
        </div>
        <br><br>
        <?php
        include '../includes/footer.php';
        session_destroy();
        ?>
      </div>
    </div>
  </center>
</body>

</html>

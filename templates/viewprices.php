<?php
session_start();
require '../includes/common.php';
$view_q = "SELECT * FROM prices WHERE id = 1";
$view_q_res = mysqli_query($con, $view_q) or die(mysqli_error($con));
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
  <title>View Current Prices</title>
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
    <?php
    $row = mysqli_fetch_array($view_q_res);
    ?>
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-5">
                <center>
                  <p style="text-align: left; font-size: 20px;">Items</p>
                </center>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Leather Football Grain:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["leatherFootballGrain"] ?>/dm</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Leather Lining Split CG:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["leatherLiningSplitCG"] ?>/dm</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">CG Thoker Grain:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["CGThokerGrain"] ?>/dm</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Leather Crust Swead Split:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["leatherCrustSweadSplit"] ?>/dm</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">PU Cloth:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["PUCloth"] ?>/m</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Lycra Cloth With 3mm Foam:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["lycraClothWith3mmFoam"] ?>/m</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Liberty Cloth With 3mm Foam:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["libertyClothWith3mmFoam"] ?>/m</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">8mm Foam For Counter:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["8mmFoamForCounter"] ?>/sheet</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">15mm Foam For Collar Band:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["15mmFoamForCollarBand"] ?>/sheet</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">1inch Halter Nivaad:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["1inchHalterNivaad"] ?>/kg</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">2inch Nivaad W:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["2inchNivaadW"] ?>/kg</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">19mm Tung Binding:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["19mmTungBinding"] ?>/kg</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">600mm Eyelet:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["600mmEyelet"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Hook:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["hook"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">7mm Jam Button:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["7mmJamButton"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">150cm Shoe Lace:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["150cmShoeLace"] ?>/pair</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">1.8mm TP Sheet:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["1.8mmTPSheet"] ?>/sheet</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">3.5mm Leather Board Banwar:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["3.5mmLeatherBoardBanwar"] ?>/sheet</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">13mm Tingle:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["13mmTingle"] ?>/box</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Softner:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["softner"] ?>/l</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">3mm Socks:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["3mmSocks"] ?>/m</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Heel:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["heel"] ?>/pair</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Galli:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["galli"] ?>/pair</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Kachcha Solution For Closing:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["kachchaSolutionForClosing"] ?>/l</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Pakka Solution For Closing:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["pakkaSolutionForClosing"] ?>/l</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Solution For Moulding:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["solutionForMoulding"] ?>/l</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Polyethene Bag:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["polyetheneBag"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Polyethene Bag (white):</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["polyetheneBagWhite"] ?>/kg</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Carton:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["carton"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Jhall:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["jhall"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Side Rubber Sticker:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["sideRubberSticker"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Heel Rubber Sticker:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["heelRubberSticker"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Tung Cloth Sticker:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["tungClothSticker"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Paper Band:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["paperBand"] ?>/piece</p>
                  </p>
                </center>
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row">
              <div class="col-xs-6">
                <b style="font-size: 20px;">Paper Tag:</b>
              </div>
              <div class="col-xs-6">
                <center>
                  <p style="font-size: 30px;">₹ <?php echo $row["paperTag"] ?>/piece</p>
                  </p>
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
  </center>
</body>

</html>

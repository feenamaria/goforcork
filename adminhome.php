<!--.TODO Remove Add Boxes-->
<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
$userid = $_SESSION['user'];
//TODO: Check whether admin or not
if (!$userid) {
    echo "<script>
		window.location.href='index.php?u=expired';
		</script>";
}
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <title>MRCHARMONY</title>
    <!-- Core CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <style type="text/css">
        <!--
        .style1 {
            font-size: 12px
        }

        .style2 {
            font-family: "Times New Roman", Times, serif
        }

        .style3 {
            font-size: 18px
        }

        .style4 {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
        }

        -->
    </style>
</head>
<!-- NAVBAR==================================================-->
<body>
<div class="container">
    <div class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h3 style=" text-align:center;color:#FFFFFF">
                <center>
                    <b>ADMIN HOME</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="header1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="myusage.php" class="style2 style3"> My Usage </a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="adminchangepassword.php" class="style4"> Change Password </a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="index.php" class="style2 style3"> Log Out </a></div>
        </div>
    </div>

    <?php
    include('db.php');
    $sql = mysql_query("SELECT * FROM memberdetails WHERE id='$userid';");
    $row = mysql_fetch_array($sql);
    $sponsor = $row['sponsor'];
    if ($sponsor == 'yes') {
        ?>
        <div>
            <div align="center"><a href="sponsorhome.php" class="style2 style3"> Sponsor Home </a></div>
        </div>
        <?php
    };
    ?>

    <div class="log-in">
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png" style="height:150px;width:250px;">
                </center>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="addmember.php">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">Add
                                Member
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="editmember.php">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">Edit
                                Member
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="stockdistribution.php">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">Stock
                                Distribution
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="paymentsummary.php?month=3&year=2016">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">
                                Payment Summary
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a
                        href="corkusagesummary.php?current=<?php echo date('Y-m-01') ?>">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">
                                Cork Usage Summary
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>
            <br/>
            <div class="row" style="margin-bottom: 60px;">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="amountpayment.php">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg">
                                Amount to Pay
                            </button>
                        </center>
                    </a></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>
            </div>             
        </div>
    </div>
    <div class="container navbar-fixed-bottom">
        <div class="header3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>
                <font color="#FFFFFF"><span
                        class="style1">Copyright 2016@Appko Technologies India Private Limited</span> </font>
            </center>
        </div>
    </div>
</div>

<!-- Core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript">
</script>
</body>
</html>

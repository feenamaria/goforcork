<?php
error_reporting(0);
session_start();
$userid = $_SESSION['user'];
if (!$userid) {
    echo "<script>
		window.location.href='index.php?u=expired';
		</script>";
}
?>
<!DOCTYPE html>
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
                    <b>ADMIN LOGIN</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="log-in" style="margin-bottom: 60px;">
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png">
                </center>
            </div>
            <form method="post" action="logincheck.php">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <?php
                            error_reporting(0);
                            $x = 1;
                            if ($x == $_GET['a']) {
                                ?>
                                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert"
                                                                   aria-label="close">&times;</a>You have entered a
                                    Wrong Password. Please enter Correct Password.
                                </div>
                                <?php

                            }


                            ?>
                            <span id="mob"></span>
                            <div class="">
                                <input class="form-control login-mob" type="password" name="password" value=""
                                       autocomplete="off" placeholder="enter admin password" maxlength="10" onkeypress='return event.keyCode == 8 || event.keyCode == 13 || event.keyCode !=32' autofocus required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <button class="btn logi-btnn" id="logi-btnn" type="submit" value="Submit" name="btn-reg">LOGIN
                        </button>
                    </div>
                </div>
            </form>
            <br/>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <?php
                    error_reporting(0);
                    $x = 2;
                    if ($x == $_GET['b']) {
                        ?>
                        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert"
                                                            aria-label="close">&times;</a> Enter the Password that has been send to your registered mobile
                            number!!!
                        </div>
                        <?php

                    }
                    ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            </div>
            <a href="sendpassword.php">
                <center>
                    Forgot password?
                </center>
            </a></div>
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

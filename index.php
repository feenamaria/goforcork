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
    <title>GOFORCORK</title>
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
                    <b>MRC HARMONY</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="log-in">
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png">
                </center>
            </div>
            <form method="post" action="sign.php">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <?php
                            error_reporting(0);
                            $invaliduser = "invalid";
                            $sessionexpired = "expired";
                            if ($invaliduser == $_GET['u']) {
                                ?>
                                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert"
                                                                   aria-label="close">&times;</a> Your MobileNumber is
                                    not Registered with MRC HARMONY. Please Contact Admin..
                                </div>
                                <?php

                            } else if ($sessionexpired == $_GET['u']) {
                                ?>
                                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert"
                                                                   aria-label="close">&times;</a> Session Expired,
                                    Please login again!!
                                </div>
                                <?php
                            } ?>
                            <div class="">
                                <input class="form-control login-mob" type="text" required name="mobilenumber"
                                       maxlength="10" id="mobilenumber"
                                       onkeypress='return event.keyCode == 8 || event.charCode >=48 && event.charCode<=57 '
                                       placeholder="Mobile Number" pattern="^(7|8|9)\d{9}"
                                       title="Enter a valid 10 digit mobilenumber starting with 9/8/7"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <button class="btn logi-btnn" id="logi-btnn" type="submit" value="Submit" name="btn-login">
                            Continue &nbsp; <i class="fa fa-fighter-jet"></i></button>
                    </div>
                </div>
            </form>
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

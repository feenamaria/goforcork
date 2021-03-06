<!--TODO : 1. After adding a new member, successfull/failure message to be displayed.-->
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

        .style2 {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
        }

        .style3 {
            color: #999999
        }

        .style4 {
            color: #666666
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
                    <b>EDIT MEMBER</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="log-in">
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png" style="height:150px;width:250px;">
                </center>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <?php
                        error_reporting(0);
                        $x = 1;
                        if ($x == $_GET['a']) {
                            ?>
                            <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert"
                                                                aria-label="close">&times;</a> Details Updated
                                Successfuly...
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="">
                                <select name="memberid" input class="form-control" id="sel-member-name" required/>
                                <?php
                                include('db.php');
                                $sql = mysql_query("select * from memberdetails");
                                while ($row = mysql_fetch_array($sql)) {
                                    $name = $row['name'];
                                    $no = $row['mobilenum'];
                                    $sponsor = $row['sponsor'];
                                    $memberid = $row['id'];

                                    ?>
                                    <option data-phno="<?php echo $no ?>" data-issponsor="<?php echo $sponsor ?>"
                                            value="<?php echo $memberid ?>"><?php echo $name ?></option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control" id="phone-num" type="text" name="mobilenumber"
                                       onkeypress='return event.keyCode == 8 || event.charCode >=48 && event.charCode<=57 '
                                       pattern="^(7|8|9)\d{9}" placeholder="enter mobilenumber" maxlength="10"
                                       title="Enter a valid 10 digit mobilenumber starting with 9/8/7" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <span class="style4">&nbsp;&nbsp;Sponsor:&nbsp;&nbsp;
            <input type="checkbox" id="sponsor-chkbx" name="sponsor" value="yes">
            &nbsp;&nbsp;YES
            &nbsp;&nbsp;
                            </input>
            </span></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                  <br/>
                <br/>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg"
                                    formaction="updatevalues.php">Save & Continue
                            </button>
                        </center>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <center>
                            <button class="btn logi-btnp"  name="btn-reg"
                                    formaction="adminhome.php">Back
                            </button>
                        </center>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
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

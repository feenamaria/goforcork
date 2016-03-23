    <!--TODO: 1.Allignments 2.Validate unit price(>0, int)-->
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

        .style2 {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
        }

        .style3 {
            color: #999999
        }

        .style4 {
            padding-top: 8px;
            color: #666666
        }

        -->
    </style>
</head>
<!-- NAVBAR==================================================-->
<body>
<div class="container">
    <div class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <h3 style=" text-align:center;color:#FFFFFF">
                <center>
                    <b>STOCK DISTRIBUTION</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    </div>
    <div class="log-in">
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png" style="height:150px;width:250px;">
                </center>
            </div>

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <?php
                        error_reporting(0);
                        $x = 1;
                        if ($x == $_GET['a']) {
                            ?>
                            <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert"
                                                                aria-label="close">&times;</a> Stock Distributed
                                Successfully...
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div> <form method="post">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="">

                                <select name="memberid" input class="form-control" autofocus required/>
                                <?php
                                include('db.php');
                                $sql = mysql_query("select * from memberdetails where sponsor='yes'");
                                while ($row = mysql_fetch_array($sql)) {
                                    $name = $row['name'];
                                    $memberid = $row['id'];
                                    ?>
                                    <option value="<?php echo $memberid ?>"><?php echo $name ?></option>
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div align="left"><span class="style4">&nbsp;&nbsp;Number of boxes : &nbsp;&nbsp;</span></div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="form-group">
                            <div class="">
                                <select input class="form-control" name="boxcnt" required/>
                                    <?php
                                    for ($x = 1; $x <= 10; $x++) {
                                        ?>
                                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div align="left"><span class="style4">&nbsp;&nbsp;Box Price(per box)(<i class="fa fa-inr"></i>): &nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="form-group">
                            <input type="text" id="cork-unit-price" name="unitprice" class="form-control" value="1200" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <button formaction="updatestock.php" class="btn logi-btn" id="stock-dist-save-btn"
                                    type="submit" value="Submit" name="btn-reg">Save
                                & Continue
                            </button>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                            <button class="btn logi-btnp" name="btn-reg"><a href="adminhome.php">Back
                            </a>
                            </button>
                    </div></a>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
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

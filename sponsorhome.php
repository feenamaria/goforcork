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
            font-size: 12px;
            color: #FFFFFF;
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

        .style6 {
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
                    <b>SPONSOR HOME</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    </div>
    <div class="header1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="myusage.php" class="style2 style3"> My Usage </a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="changepassword.php" class="style4"> Change Password </a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div align="center"><a href="index.php" class="style2 style3"> Log Out </a></div>
        </div>
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
                        <div class="form-group">
                            <div class="">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">Player1:</div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <select name="membername1" input class="form-control" id="membername1" required/>

                                    <?php
                                    include('db.php');
                                    $sql = mysql_query("select * from memberdetails");
                                    while ($row = mysql_fetch_array($sql)) {
                                        $name = $row['name'];
                                        ?>
                                        <option value="<?php echo $name ?>"><?php echo $name ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">Player2:</div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <select name="membername2" input class="form-control" id="membername2" required/>

                                    <?php
                                    include('db.php');
                                    $sql = mysql_query("select * from memberdetails");
                                    while ($row = mysql_fetch_array($sql)) {
                                        $name = $row['name'];
                                        ?>
                                        <option value="<?php echo $name ?>"><?php echo $name ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">Player3:</div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <select name="membername3" input class="form-control" id="membername3" required/>

                                    <?php
                                    include('db.php');
                                    $sql = mysql_query("select * from memberdetails");
                                    while ($row = mysql_fetch_array($sql)) {
                                        $name = $row['name'];
                                        ?>
                                        <option value="<?php echo $name ?>"><?php echo $name ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">Player4:</div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <select name="membername4" input class="form-control" id="membername4" required/>

                                    <?php
                                    include('db.php');
                                    $sql = mysql_query("select * from memberdetails");
                                    while ($row = mysql_fetch_array($sql)) {
                                        $name = $row['name'];
                                        ?>
                                        <option value="<?php echo $name ?>"><?php echo $name ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <center>
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg"
                                    formaction="insertplayers.php">Save & Continue
                            </button>
                        </center>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <center>
                            <button class="btn logi-btnp" id="logi-btn" type="submit" value="Submit" name="btn-reg">
                                Done
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
                <span class="style1">Copyright 2016@Appko Technologies India Private Limited</span>
            </center>
        </div>
    </div>
</div>
<!-- Core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="css/js/bootstrap.min.js"></script>
<script src="css/js/custom.js"></script>
<script src="css/js/jquery.js"></script>
<script type="text/javascript">
</script>
</body>
</html>

<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
$userid = $_SESSION['user'];

if(!isset($_SESSION['cork_distribute_date'])){
    $_SESSION['cork_distribute_date'] = date('Y-m-d');
}

//echo $userid;
//TODO: Check whether admin or not
if (!$userid) {
    echo "<script>
		window.location.href='index.php?u=expired';
		</script>";
}
//if ($userid) {
//define a function to check whether admin or not
//    def function is_sponsor(
//    if ("yes" == mysql_query("select admin from memberdetails where id='$userid';")) {
//        return true;
//    } else {
//        return false;
//    })
//    if (!is_sponsor($userid)) {
//        window.location.hrefff = 'index.php?u=nopermission'
//    }
//}
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

        .stylel {
            padding-top: 7px;
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
            <div align="center"><a href="sponsorchangepassword.php" class="style4"> Change Password </a></div>
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
                        <?php
                        include('db.php');
                        $sql = mysql_query("select * from corkpossession where memberid='$userid';");
                        $row_cnt = mysql_num_rows($sql);
                        if ($row_cnt == 0) {
                            ?>
                            <div class="alert alert-danger"><a class="close" data-dismiss="alert"
                                                               aria-label="close">&times;</a> You got no corks left!!
                            </div>
                            <?php
                        }
                        ?>

                        <div class="form-group">
                            <div class="">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Date:</div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="newdate" value="<?php echo $_SESSION['cork_distribute_date']?>" id="datepicker" autocomplete="off" autofocus required/>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Cork (<i class="fa fa-inr"></i>)</div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <select name="corkid" input class="form-control" required/>
                                    <?php
                                    while ($row = mysql_fetch_array($sql)) {
                                        $unitprice = $row['unitprice'];
                                        // $unitprice = round($boxprice/12);
                                        $corkid = $row['id'];
                                        ?>
                                        <option value="<?php echo $corkid ?>"><?php echo $unitprice ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Player1:</div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control tags" name="memberid1"
                                           placeholder="enter player1 name" required/>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Player2:</div>
                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control tags" name="memberid2"
                                           placeholder="enter player2 name" required/>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Player3:</div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control tags" name="memberid3"
                                           placeholder="enter player3 name" required/>
                                </div>
                                <br/><br/>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 style6">
                                    <div class="stylel">Player4:</div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control tags" name="memberid4"
                                           placeholder="enter player4 name" required/>
                                </div>
                                <br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
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
                                                                aria-label="close">&times;</a>Cork Allotted!!!
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>

                <!--                TODO: Align correctly-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg"
                                formaction="insertplayers.php"
                            <?php if ($row_cnt == 0) {
                                echo "disabled";
                            } ?>
                        >
                            Save & Continue
                        </button>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    </div>
            </form>
        </div>
    </div>
    <br/><br/>
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
<script type="text/javascript">
</script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-uiauto.js"></script>
<script>
    $(function () {
        var availableTags = [];
        <?php

        $sql = mysql_query("select * from memberdetails");
        while ($row = mysql_fetch_array($sql)) {
        ?>
        availableTags.push("<?php echo $row['name']; ?>");
        <?php
        }
        ?>
        $(".tags").autocomplete({
            source: availableTags
        });
    });
    $(function() {
        $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd",showOtherMonths: true,
            selectOtherMonths: true});
    });
</script>
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</body>
</html>

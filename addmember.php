<!--TODO : After adding a new member, successfull/failure message to be displayed.-->
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
                    <b>ADD MEMBER</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <br>
    <br>
    <br>
    <div class="header1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div align="right"><a href="editmember.php" class="style2">Edit Member</a></div>
        </div>
    </div>
    <div class="log-in" style="margin-bottom:60px;">
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
                                                                aria-label="close">&times;</a> Member Added
                                Successfully...
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
                        <?php
                        error_reporting(0);
                        $x = 10;
                        if ($x == $_GET['xyz']) {
                            ?>
                            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert"
                                                                aria-label="close">&times;</a> Mobile number already exists!!!
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
                                <input class="form-control" type="text" name="membername" placeholder="enter name" autocomplete="off" autofocus
                                       required/>
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
                                <input class="form-control" type="text" action="" name="mobilenumber"
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
            <input type="checkbox" name="sponsor" value="yes">
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
                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> 
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <button class="btn logi-btn" id="logi-btn" type="submit" value="Submit" name="btn-reg"
                                    formaction="valuesinsert.php">Add New
                            </button>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a href="adminhome.php">
                                <button class="btn logi-btnp" id="logi-btn" name="btn-reg"> Back
                            </a>
                            </button>
                    </div>
                    </div>
                    <div>
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

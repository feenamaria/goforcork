<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/favicon.ico">
<title>GOFORCORK</title>
<!-- Core CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="fonts/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/custom.css"  type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style5 {font-size: 14px}
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
          <b>CHANGE PASSWORD</b>
        </center>
      </h3>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>
  <div class="log-in" >
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
                <input class="form-control" type="password" name="oldpassword" placeholder="enter old password"/>
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
                <input class="form-control" type="password" name="newpassword" placeholder="enter new password"/>
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
                <input class="form-control" type="password" name="newpassword1" placeholder="confirm password"/>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
		
		 <?php
      error_reporting(0);
      $x=1;
      if($x==$_GET['a'])
      {
        ?>
              <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>New Password & Confirm password mismatch. Please enter Correct Password. </div>
              <?php

      }


      ?>
		
		
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <button name="btn-reg" value="Submit" type="submit" class="btn logi-btnn style5" id="logi-btnn" formaction="passwordchange.php">Save Password</button>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container navbar-fixed-bottom">
    <div class="header3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <center>
        <font color="#FFFFFF"><span class="style1">Copyright 2016@Appko Technologies India Private Limited</span> </font>
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

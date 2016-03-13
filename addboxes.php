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
.style5 {font-size: 18}
.style6 {width: 100%; height: 34px; padding: 6px 12px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s; -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;display: block;}
.style7 {width: 100%; height: 34px; padding: 6px 12px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s; -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;display: block;}
.style8 {height: 40px; background-color:#009933; border-radius:20px; border-color:#1B2C3B; color: #FFF; font-weight: bold; width: 80%;}
.style9 {height: 40px; background-color:#FF6600; border-radius:20px; border-color:#1B2C3B; color: #FFF; font-weight: bold; width: 80%;}
.style12 {font-size: 16px; color: #999999; }
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
          <b>ADD BOXES</b>
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
      <form method="post" action="adminhome.php">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group">
              <div class="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                  <div align="center" class="style12">No: of boxes: </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 style5">
                  <input name="numbox" type="text" class="style6"/>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 style5"></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 style5"></div>
        </div>
		<span class="style5"><br/>
		</span>
		<div class="row style5">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group">
              <div class="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                  <div align="center" class="style12">Unit Cork Price:(<i class="fa fa-inr"></i>) </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <input name="unitprice" type="text" class="style7"/>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
		<span class="style5"><br/>
        </span>
		<div class="row style5">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <center>
              <button name="btn-reg" value="Submit" type="submit" class="btn  style8" id="logi-btn">Save & Continue</button>
            </center>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <center>
              <button name="btn-reg" value="Submit" type="submit" class="btn  style9" id="logi-btn">Done</button>
            </center>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
      </form>
    </div>
  </div>
  <div class="container navbar-fixed-bottom style5">
    <div class="header3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <center>
        <font color="#FFFFFF">Copyright 2016@Appko Technologies India Private Limited </font>
      </center>
    </div>
  </div>
</div>
<span class="style5">
<!-- Core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript"> 
</script>
</span>
</body>
</html>

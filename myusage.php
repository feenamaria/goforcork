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
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <style type="text/css">
        <!--
        .style1 {
            font-size: 12px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        * {box-sizing:border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana,sans-serif;}

        .month {
            width: 100%;
            background:#00FF66;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
        }

        .month .prev {
            float: left;
        }

        .month .next {
            float: right;
        }

        .weekdays {
            margin: 0;
            background-color:#FF6633;
        }

        .weekdays li {
            display: inline-block;
            width: 12%;
            color: #666;
            text-align: center;
        }

        .days {
            background:#FFFFFF;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 12%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important;
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:320px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
        .style6 {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
        }
        -->

        div#calendar{
            margin:0px auto;
            padding:0px;
            width: 402px;
            font-family:Helvetica, "Times New Roman", Times, serif;
        }

        div#calendar div.box{
            position:relative;
            top:0px;
            left:11px;
            width:50%;
            height:20px;

        }

        div#calendar div.header{
            line-height:40px;
            vertical-align:middle;
            position:absolute;
            left:20px;
            right:60px;
            top:0px;
            width:355px;
            height:10px;
            text-align:center;
            background-color:#00CC33;
        }

        div#calendar div.header a.prev,div#calendar div.header a.next{
            position:absolute;
            top:0px;
            height: 0px;
            display:block;
            cursor:pointer;
            text-decoration:none;
            color:#000000;
        }

        div#calendar div.header span.title{
            color:#FFF;
            font-size:20px;
        }


        div#calendar div.header a.prev{
            left:0px;
        }

        div#calendar div.header a.next{
            right:0px;
        }




        /*******************************Calendar Content Cells*********************************/
        div#calendar div.box-content{
            border:px solid #black;
            border-top:5px;
            padding-bottom:50px;
            padding-top:5px;
            margin-top:5px;
            margin-bottom:50px;
            margin-left:20px;
            height:100px;



        }



        div#calendar ul.label{
            float:left;
            margin: 0px;
            padding: 0px;
            margin-top:20px;
            margin-left:10px;
            height:50px;

        }

        div#calendar ul.label li{
            margin:0px;
            padding:0px;
            margin-right:1px;
            float:right;
            list-style-type:none;
            width:50px;
            height:30px;
            line-height:20px;
            vertical-align:middle;
            text-align:center;
            color:#000;
            font-size: 15px;
            background-color:#FF8040;
        }


        div#calendar ul.dates{
            float:left;
            margin: 0px;
            padding: 0px;
            margin-left: 10px;
            margin-bottom: 50px;
            padding-top:10px;
            padding-bottom:5px;
        }

        /** overall width = width+padding-right**/
        div#calendar ul.dates li{
            margin:0px;
            padding:0px;
            margin-right:1px;
            margin-top: 2px;
            line-height:30px;
            vertical-align:middle;
            float:left;
            list-style-type:none;
            width:50px;
            height:20px;
            font-size:15px;
            background-color: #DDD;
            color:#000;
            text-align:center;
        }

        :focus{
            outline:none;
        }

        div.clear{
            clear:both;
        }
    </style>
    <style>
        .ui-highlight .ui-state-default{
            background: red !important;
            border-color: red !important;
            color: white !important;
        }
    </style>
    <script type="text/javascript" language="javascript">
        var dates = ['2016-03-05','2016-03-15','2016-03-25'];
        jQuery(function(){
            jQuery('input[type=text]').datepicker({
                changeMonth : true,
                changeYear : true,
                beforeShowDay : function(date){
                    var y = date.getFullYear().toString(); // get full year
                    var m = (date.getMonth() + 1).toString(); // get month.
                    var d = date.getDate().toString(); // get Day
                    if(m.length == 1){ m = '0' + m; } // append zero(0) if single digit
                    if(d.length == 1){ d = '0' + d; } // append zero(0) if single digit
                    var currDate = y+'-'+m+'-'+d;
                    if(dates.indexOf(currDate) >= 0){
                        return [true, "ui-highlight"];
                    }else{
                        return [true];
                    }
                }
            });
        })
    </script>
</head>
<!-- NAVBAR==================================================-->
<body>
<div class="container">
    <div class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h3 style=" text-align:center;color:#FFFFFF">
                <center>
                    <b>MY USAGE</b>
                </center>
            </h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="log-in" >
        <div class="log-content">
            <div class="log-logo">
                <center>
                    <img src="images/icons/ic_launcher.png" style="height:110px;width:150px;">
                </center>
            </div>
            <?php
            include 'calendar.php';
            $calendar = new Calendar();
            echo $calendar->show();
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="style6">Total No: of Corks Used&nbsp;:&nbsp;5</span><br/>
                    <span class="style6">Total Amount:&nbsp;:&nbsp;&nbsp;<i class="fa fa-inr"></i>&nbsp;250/-</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><br/>
                <br/>
                <a href="index.php">
                    <button class="btn logi-btnn" id="logi-btnn" type="submit" name="btn-login">DONE</button>
                </a> </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="container navbar-fixed-bottom">
        <div class="header3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>
                <font color="#FFFFFF"><span class="style1">Copyright 2016@Appko Technologies India Private Limited</span> </font>
            </center>
        </div>
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

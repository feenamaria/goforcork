<!DOCTYPE html>
<?php
$current_date = isset($_GET["current"]) ? $_GET["current"] : date('Y-m-01');
$current_month = date('m', strtotime($current_date));
$current_year = date('Y', strtotime($current_date));
$next_date = date('Y-m-01', strtotime('+1 month', strtotime($current_date)));
$previous_date = date('Y-m-01', strtotime('-1 month', strtotime($current_date)));
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
    <title>GOFORCORK</title>
    <!-- Core CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <style type="text/css">
        <!--

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

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
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <h3 style=" text-align:center;color:#FFFFFF">
                <center>
                    <b>CORK USAGE SUMMARY</b>
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
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <a href="corkusagesummary.php?current=<?php echo $previous_date; ?>">
                <button class="btn">
                    Previous
                </button>
            </a>
            Current month : <?php echo $current_month; ?>/<?php echo $current_year; ?>
            <a href="corkusagesummary.php?current=<?php echo $next_date; ?>">
                <button class="btn" <?php if ($current_date >= date('Y-m-01')) {
                    echo "disabled";
                }; ?>>
                    Next
                </button>
            </a>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <table>
                        <tr>
                            <th>
                                <div align="left">Name</div>
                            </th>
                            <th>
                                <div align="center">No: of Corks</div>
                            </th>
                            <th>
                                <div align="center">Amt. (<i class="fa fa-inr"></i>)</div>
                            </th>
                        </tr>
                        <tr>
                            <?php
                            include('db.php');
                            $sql = mysql_query("SELECT memid,(SELECT name from memberdetails WHERE id=memid) as memname, SUM(corkcnt) as totalcorkcnt, SUM(price) as totalprice FROM corkusage where MONTH(date) = '$current_month' and YEAR(date) = '$current_year' GROUP BY memid");
                            while ($row = mysql_fetch_array($sql))
                            {
                            $memid = $row['memid'];
                            $name = $row['memname'];
                            $totalcorkcount = $row['totalcorkcnt'];
                            $totalprice = $row['totalprice'];

                            ?>
                            <td>
                                <div align="left"><?php echo $name ?></div>
                            </td>
                            <td>
                                <div align="center"><?php echo $totalcorkcount ?></div>
                            </td>
                            <td>
                                <div align="center"><?php echo $totalprice ?></div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            </div>
            <br/>
            <br/>
        </div>
    </div>
    <br/><br/><br/>
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

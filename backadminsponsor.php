<?php
include('db.php');
error_reporting(0);
session_start();
$userid = $_SESSION['user'];
$sql = mysql_query("SELECT * FROM memberdetails WHERE id='$userid'");
$row = mysql_fetch_array($sql);
$admin = $row['admin'];
$sponsor = $row['sponsor'];
//    TODO Dont user mobilenumber in the session, instead id itself can be used everywhere.
if ($admin == 'yes' && $sponsor == 'no') {
    ?>
    <script>
        window.location.href = "adminhome.php";
    </script>
    <?php
} else if ($admin == 'no' && $sponsor == 'yes') { ?>
    <script>
        window.location.href = "sponsorhome.php";</script>
    <?php
}

?>
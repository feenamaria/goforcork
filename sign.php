<?php
if ($_POST["mobilenumber"]) {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
//    TODO : No need to use mobile number in session anywhere
    if (isset($_SESSION['mobilenumber'])) {
        unset($_SESSION['mobilenumber']);
    }
    session_regenerate_id(FALSE);
    session_unset();
    session_start();
    include('db.php');
    $MbNum = $_POST['mobilenumber'];
    $sql = mysql_query("SELECT * FROM memberdetails WHERE mobilenum='$MbNum' LIMIT 1;");
    $row = mysql_fetch_array($sql);
    $memberid = $row['id'];
    $admin = $row['admin'];
    $sponsor = $row['sponsor'];
    $_SESSION['user'] = $memberid;
//    TODO Dont user mobilenumber in the session, instead id itself can be used everywhere.
    $_SESSION['mobilenumber'] = $MbNum;
    if (mysql_num_rows($sql) === 0) {
        echo "<script>
		window.location.href='index.php?u=invalid';
		</script>";

    }
    if ($admin == 'yes') {
        ?>
        <script>
            window.location.href = "adminlogin.php";
        </script>
        <?php
    } else if ($sponsor == 'yes') {
        ?>
        <script>
            window.location.href = "sponsorlogin.php";
        </script>
        <?php
    } else if (($admin == 'no') || ($sponsor == 'no')) {
        ?>
        <script>
            window.location.href = "myusage.php";
        </script>
        <?php
    }
}
?>

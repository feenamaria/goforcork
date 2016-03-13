<?php
if ($_POST["mobilenumber"]) {
    session_start();
    include('db.php');
    $MbNum = $_POST['mobilenumber'];
    $sql = "SELECT * FROM memberdetails WHERE mobilenum = '";
    $sql1 = "'";
    $sql = $sql . $MbNum;
    $sql = $sql . $sql1;
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);
    $memberid = $row['memberid'];
    $admin = $row['admin'];
    $sponsor = $row['sponsor'];
    $_SESSION['user'] = $memberid;
    $_SESSION['mobilenumber'] = $MbNum;
    $find = mysql_num_rows($res);
    if ($find != 0 && $admin == 'yes') {
        ?>
        <script>
            window.location.href = "adminlogin.php";
        </script>
        <?php
    } else if ($find != 0 && $sponsor == 'yes') {
        ?>
        <script>
            window.location.href = "sponsorlogin.php";
        </script>
        <?php
    } else if ($find != 0 && (($admin == 'no') || ($sponsor == 'no'))) {
        ?>
        <script>
            window.location.href = "myusage.php";
        </script>
        <?php
    } else {
        echo "<script>
		window.location.href='index.php?a=1';
		</script>";

    }
}
?>

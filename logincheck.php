<?php
if ($_POST["password"]) {
    session_start();
    include('db.php');
    $mobnum = $_SESSION['mobilenumber'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM memberdetails WHERE mobilenum ='$mobnum' ";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);
    $memberid = $row['id'];
    $admin = $row['admin'];
    $sponsor = $row['sponsor'];
    $mbno = $row['mobilenum'];
    echo $admin;
    echo $memberid;
    $_SESSION['user'] = $memberid;
    $find = mysql_num_rows($res);
    if ($row['password'] == $password && ($mobnum == $mbno) && ($admin == 'yes')) {
        ?>
        <script>
            window.location.href = "adminhome.php";
        </script>
        <?php
    } else if ($row['password'] == $password && ($mobnum == $mbno) && ($sponsor == 'yes')) {
        ?>
        <script>
            window.location.href = "sponsorhome.php";
        </script>
        <?php
    } else if ($row['password'] != $password && ($mobnum == $mbno) && ($sponsor == 'yes')) {
//        echo $password;
//        echo $row['password'];
        echo "<script>
		window.location.href='sponsorlogin.php?a=1';
		</script>";

    } else if ($row['password'] != $password && ($mobnum == $mbno) && ($admin == 'yes')) {
//        echo $memberid;
//        echo $password;
//        echo $row['password'];
        echo "<script>
		window.location.href='adminlogin.php?a=1';
		</script>";

    }
}

?>
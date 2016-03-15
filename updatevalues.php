<?php
if ($_POST["memberid"]) {
    session_start();
    include('db.php');
    $memberid = $_POST['memberid'];
    $mobnum = $_POST['mobilenumber'];
    $sponsor = isset($_POST['sponsor']) ? $_POST['sponsor'] : "no";
    if ($sponsor == "yes") {
        $password = "password"; //TODO store the default password in single place.
    } else {
        $password = "";
    }
    $sql = mysql_query("UPDATE memberdetails SET mobilenum='$mobnum',sponsor='$sponsor',password='$password' WHERE id='$memberid';");
};
echo "
<script>
    window.location.href = 'editmember.php?a=1';
</script>"; ?>
    	
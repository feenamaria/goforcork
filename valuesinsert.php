<?php
if ($_POST["membername"]) {
    session_start();
    include('db.php');
    $membernam = $_POST['membername'];
    $membername = ucfirst($membernam);
    $mobnum = $_POST['mobilenumber'];
    $sponsor = $_POST['sponsor'];
    if ($sponsor == 'yes') {
        if (mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,nboxes,ncorks,password,amountdue) VALUES('$membername','$mobnum','no','$sponsor','nil','nil','sponsor','nil')")) ;
    } else {
        if (mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,nboxes,ncorks,password,amountdue) VALUES('$membername','$mobnum','no','no','nil','nil','nil','nil')")) ;
    }
};
?>
<script>
    window.location.href = "addmember.php";
</script>
         
<?php
if ($_POST["membername"]) {
    session_start();
    include('db.php');
    $membernam = $_POST['membername'];
    $membername = ucfirst($membernam);
    $mobnum = $_POST['mobilenumber'];
    $sponsor = $_POST['sponsor'];
    if ($sponsor == 'yes') {
//        TODO: Remove if and make it proper
        if (mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,password,amountdue) VALUES('$membername','$mobnum','no','$sponsor','sponsor','nil')")) ;
    } else {
        if (mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,password,amountdue) VALUES('$membername','$mobnum','no','no','nil','nil')")) ;
    }
};
?>
<script>
    window.location.href = "addmember.php";
</script>
         
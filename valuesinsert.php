<?php
if ($_POST["membername"]) {
    error_reporting(0);
    session_start();
    include('db.php');
    $membernam = $_POST['membername'];
    $membername = ucfirst($membernam);
    $mobnum = $_POST['mobilenumber'];
    $sponsor = $_POST['sponsor'];
	$sql=mysql_query("SELECT * FROM `memberdetails` WHERE  mobilenum='$mobnum' LIMIT 1");
	$row = mysql_fetch_array($sql);
	$nrows= mysql_num_rows($sql);
	if($nrows === 0){
    if ($sponsor == 'yes') {
        mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,password,amountdue) VALUES('$membername','$mobnum','no','$sponsor','sponsor','0')");
    } else {
        mysql_query("INSERT INTO memberdetails(name,mobilenum,admin,sponsor,password,amountdue) VALUES('$membername','$mobnum','no','no','nil','nil')");
    }
	}
	else
	{
			echo"<script>
			window.location.href = 'addmember.php?xyz=10';
			</script>";
	
	}
};
echo "
<script>
    window.location.href = 'addmember.php?a=1';
</script>";
 ?>

         
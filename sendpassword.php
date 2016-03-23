<?php
error_reporting(0);
session_start();
include('db.php');
$mobnum = $_SESSION['mobilenumber'];
$sql = "SELECT * FROM memberdetails WHERE mobilenum='$mobnum'";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
$password = $row['password'];
$name = $row['name'];
$admsms = 'Hello %name%. You are admitted in %class% for session %session%. www.smsg.com';
$sms = str_ireplace(array('%name%', '%class%', '%session%'), array('Indrajit Lahiri', 'Nursery', '2015-16'), $admsms);
$sms = str_replace(' ', '%20', $sms);
$mobno = $mobnum;
$variable1 = "http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=HqWiioRho0qVDapv1QBTxA&senderid=APTIPL&channel=2&DCS=0&flashsms=0&number=";
$variable2 = $variable1 . $mobnum;
$variable3 = "&text=";
$variable4 = $variable2 . $variable3;
$variable9 = "Dear%20".$name;
$variable9 = $variable9.",Your%20Password%20for%20MRC%20Harmony%20is:";
$variable5 = $variable9 . $password;
$variable6 = $variable4 . $variable5;
$variable7 = "&route=1";
$variable8 = $variable6 . $variable7;
// to replace the space in message with '%20'
$url = $variable8;
// create a new cURL resource
$ch = curl_init();
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $url);
// grab URL and pass it to the browser
curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
?>
<script>
    //window.location.href = 'addmember.php?a=1';
    window.location.href = 'adminlogin.php?b=2';
</script>
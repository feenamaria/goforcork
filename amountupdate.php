<?php
session_start();
include('db.php');
$name = $_POST['membername'];
$amountdue = $_POST['amountdue'];
$amountpaid = $_POST['amtpaid'];
$totalamount = $amountdue - $amountpaid;
echo $totalamount;
if (mysql_query("UPDATE memberdetails SET amountdue='$totalamount' WHERE name='$name'")) ;

?>
<script>
    window.location.href = "amountpayment.php";
</script>
          
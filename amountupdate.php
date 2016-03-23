<!--TODO remove all the if's in mysql_query...assign it to sql-->
<?php
error_reporting(0);
session_start();
include('db.php');
$memberid = $_POST['memberid'];
//$amountdue = $_POST['amountdue'];
$amountpaid = $_POST['amtpaid'];
//$totalamount = $amountdue - $amountpaid;
//echo $totalamount;
mysql_query("UPDATE memberdetails SET amountdue=amountdue-'$amountpaid' WHERE id='$memberid'") ;

echo "
<script>
    window.location.href = 'amountpayment.php?a=1';
</script>"; ?>
          
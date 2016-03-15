<!--TODO remove all the if's in mysql_query...assign it to sql-->
<?php
session_start();
include('db.php');
$memberid = $_POST['memberid'];
//$amountdue = $_POST['amountdue'];
$amountpaid = $_POST['amtpaid'];
//$totalamount = $amountdue - $amountpaid;
//echo $totalamount;
if (mysql_query("UPDATE memberdetails SET amountdue=amountdue-'$amountpaid' WHERE id='$memberid'")) ;

?>
<script>
    window.location.href = "amountpayment.php";
</script>
          
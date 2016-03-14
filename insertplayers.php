<!--TODO: in DB which ever field got int/float values(which are used to calculation) should be default 0, Also validate inputs, number only accpeted. dont accept stings-->
<?php
session_start();
include('db.php');
$memberid1 = $_POST['memberid1'];
$memberid2 = $_POST['memberid2'];
$memberid3 = $_POST['memberid3'];
$memberid4 = $_POST['memberid4'];
$corkid = $_POST['corkid'];

$sql = mysql_query(" SELECT * FROM corkpossession WHERE id='$corkid';");
$row = mysql_fetch_array($sql);
$sponsorid = $row['memberid'];
$current_corkcnt = $row['corkcnt'];
$unitprice = $row['unitprice'];
mysql_query(" UPDATE corkpossession SET corkcnt=corkcnt-1 WHERE id='$corkid';");
//It is not required to have dead rows in the DB
mysql_query(" DELETE FROM corkpossession WHERE corkcnt=0;");

mysql_query(" INSERT INTO corkdistribution (date,player1,player2,player3,player4,sponsorid,corkunitprice) VALUES (current_date,'$memberid1','$memberid2','$memberid3','$memberid4','$sponsorid','$unitprice') ");


$array = array($memberid1, $memberid2, $memberid3, $memberid4);
$memberid_array = array_count_values($array);
foreach ($memberid_array as $memid => $memcnt) {
    $corkcnt = 0.25 * $memcnt;
    $price = $unitprice * $corkcnt;
    mysql_query(" INSERT INTO corkusage (memid,date,corkcnt,sponsorid,price) VALUES ('$memid',current_date,'$corkcnt','$sponsorid','$price') ");
    mysql_query(" UPDATE memberdetails set amountdue=amountdue+'$price' WHERE id='$memid;'");
}

?>
<script>
    window.location.href = "sponsorhome.php";
</script>
         

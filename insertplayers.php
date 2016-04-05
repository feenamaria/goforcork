<!--TODO: in DB which ever field got int/float values(which are used to calculation) should be default 0, Also validate inputs, number only accpeted. dont accept stings-->
<?php
error_reporting(0);
session_start();
include('db.php');
$date = $_POST['newdate'];
$_SESSION['cork_distribute_date'] = $date;
$membername1 = $_POST['memberid1'];
$sql3 = mysql_query(" SELECT * FROM memberdetails WHERE name='$membername1'");
$row3 = mysql_fetch_array($sql3);
$memberid1 = $row3['id'];
$membername2 = $_POST['memberid2'];
$sql4 = mysql_query(" SELECT * FROM memberdetails WHERE name='$membername2'");
$row4 = mysql_fetch_array($sql4);
$memberid2 = $row4['id'];
$membername3 = $_POST['memberid3'];
$sql5 = mysql_query(" SELECT * FROM memberdetails WHERE name='$membername3'");
$row5 = mysql_fetch_array($sql5);
$memberid3 = $row5['id'];
$membername4 = $_POST['memberid4'];
$sql6 = mysql_query(" SELECT * FROM memberdetails WHERE name='$membername4'");
$row6 = mysql_fetch_array($sql6);
$memberid4 = $row6['id'];
$corkid = $_POST['corkid'];
$sql = mysql_query(" SELECT * FROM corkpossession WHERE id='$corkid';");
$row = mysql_fetch_array($sql);
$sponsorid = $row['memberid'];
$current_corkcnt = $row['corkcnt'];
$unitprice = $row['unitprice'];
mysql_query(" UPDATE corkpossession SET corkcnt=corkcnt-1 WHERE id='$corkid';");
//It is not required to have dead rows in the DB
mysql_query(" DELETE FROM corkpossession WHERE corkcnt=0;");

mysql_query(" INSERT INTO corkdistribution (date,player1,player2,player3,player4,sponsorid,corkunitprice) VALUES ('$date','$memberid1','$memberid2','$memberid3','$memberid4','$sponsorid','$unitprice') ");


$array = array($memberid1, $memberid2, $memberid3, $memberid4);
$memberid_array = array_count_values($array);
foreach ($memberid_array as $memid => $memcnt) {
    $corkcnt = 0.25 * $memcnt;
    $price = $unitprice * $corkcnt;
    mysql_query(" INSERT INTO corkusage (memid,date,corkcnt,sponsorid,price) VALUES ('$memid','$date','$corkcnt','$sponsorid','$price') ");
    mysql_query(" UPDATE memberdetails set amountdue=amountdue+'$price' WHERE id='$memid;'");
}
echo "
<script>
    window.location.href = 'sponsorhome.php?a=1';
</script>"; ?>
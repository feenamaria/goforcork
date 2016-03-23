<!--TODO : Successfull message-->
<?php
error_reporting(0);
session_start();
include('db.php');
$memberid = $_POST['memberid'];
$boxcnt = $_POST['boxcnt'];
$corksperbox = 12; // TODO move the 10 to single place.
$corkcnt = $boxcnt * $corksperbox;
$unitprice1 = $_POST['unitprice'];
$unitprice = round($unitprice1/12);
echo $unitprice;

$sql = mysql_query("SELECT * FROM corkpossession where memberid='$memberid' and unitprice='$unitprice';");
$row = mysql_fetch_array($sql);
if ($row) {
    $curerntcorkcnt = $row['corkcnt'];
    $id = $row['id'];
    $newcorkcnt = $curerntcorkcnt + $corkcnt;
    mysql_query("UPDATE corkpossession SET corkcnt='$newcorkcnt' WHERE id='$id';");
} else {
    mysql_query("INSERT INTO corkpossession(memberid, corkcnt, unitprice) VALUES('$memberid', '$corkcnt', '$unitprice');");
}
echo "
<script>
    window.location.href = 'stockdistribution.php?a=1';
</script>"; ?>


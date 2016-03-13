<!--TODO : Successfull message-->
<?php

session_start();
include('db.php');
$memberid = $_POST['memberid'];
$boxcnt = $_POST['boxcnt'];
$corksperbox = 10; // TODO move the 10 to single place.
$corkcnt = $boxcnt * $corksperbox;
$unitprice = $_POST['unitprice'];

$sql = mysql_query("SELECT * FROM corkpossession where memberid='$memberid' and unitprice='$unitprice';");
$row = mysql_fetch_array($sql);
if ($row) {
    echo "hardddi";
    $curerntcorkcnt = $row['corkcnt'];
    $id = $row['id'];
    $newcorkcnt = $curerntcorkcnt + $corkcnt;
    mysql_query("UPDATE corkpossession SET corkcnt='$newcorkcnt' WHERE id='$id';");
} else {
    mysql_query("INSERT INTO corkpossession(memberid, corkcnt, unitprice) VALUES('$memberid', '$corkcnt', '$unitprice');");
}
?>
<script>
    window.location.href = "stockdistribution.php";
</script>

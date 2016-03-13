<?php
      	session_start();
        include('db.php');
        $membername1 = $_POST['membername1'];
		$membername2 = $_POST['membername2'];
		$membername3 = $_POST['membername3'];
		$membername4 = $_POST['membername4'];
        $sql = mysql_query(" INSERT INTO corkdistribution (date,player1,player2,player3,player4) VALUES (current_date,'$membername1','$membername2','$membername3','$membername4') ");   
		
		
		$sqlretrive = mysql_query("SELECT * FROM memberdetails WHERE name='$membername1'");
		$row=mysql_fetch_array($sqlretrive);
		$n = $row['ncorks'];
		$m = $row['nboxes'];
		$ncorksnew = $n - 1;
		$ncorksby10 = $ncorksnew % 10;
		//echo $ncorksby10;
		if($ncorksby10 != 0)
		{
		$nbox = $m - 1;
		echo $nbox;
		$sqlnewupdate = mysql_query("UPDATE memberdetails SET nboxes='$nbox',ncorks='$ncorksnew' WHERE name='$membername1' ") ;
		}
		else
		{
		$sqlnewupdate = mysql_query("UPDATE memberdetails SET ncorks='$ncorksnew' WHERE name='$membername1' ") ;
		}
		
		
		$sqlretrive = mysql_query("SELECT * FROM memberdetails WHERE name='$membername2'");
		$row=mysql_fetch_array($sqlretrive);
		$n = $row['ncorks'];
		$ncorksnew = $n - 1;
		$sqlnewupdate = mysql_query("UPDATE memberdetails SET ncorks='$ncorksnew' WHERE name='$membername2' ") ;
		
		$sqlretrive = mysql_query("SELECT * FROM memberdetails WHERE name='$membername3'");
		$row=mysql_fetch_array($sqlretrive);
		$n = $row['ncorks'];
		$ncorksnew = $n - 1;
		$sqlnewupdate = mysql_query("UPDATE memberdetails SET ncorks='$ncorksnew' WHERE name='$membername3' ") ;
		
		$sqlretrive = mysql_query("SELECT * FROM memberdetails WHERE name='$membername4'");
		$row=mysql_fetch_array($sqlretrive);
		$n = $row['ncorks'];
		$ncorksnew = $n - 1;
		$sqlnewupdate = mysql_query("UPDATE memberdetails SET ncorks='$ncorksnew' WHERE name='$membername4' ") ;
		
?>
    	<script>
                window.location.href= "sponsorhome.php";
         </script>
         

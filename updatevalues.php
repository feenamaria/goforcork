<?php
   if( $_POST["membername"]) {
      	session_start();
        include('db.php');
        $membername = $_POST['membername'];
        $mobnum = $_POST['mobilenumber'];
		$sponsor = $_POST['sponsor'];
        if(mysql_query("UPDATE memberdetails SET mobilenum='$mobnum',sponsor='$sponsor' WHERE name='$membername' "));    
		};
?>
		<script>
                window.location.href= "editmember.php";
         </script>
    	
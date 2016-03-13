<?php
    if( $_POST["oldpassword"]) {
        session_start();
        include('db.php');
		$mobnum = $_SESSION['mobilenumber']; 
		$oldpassword = $_POST['oldpassword'];    
        $newpassword = $_POST['newpassword'];
		$newpassword1 = $_POST['newpassword1'];
        $sql = "SELECT * FROM memberdetails WHERE password ='$oldpassword' AND mobilenum='$mobnum'";
        $res = mysql_query($sql);
        $row = mysql_fetch_array($res);
        $admin = $row['admin'];
        $sponsor = $row['sponsor'];
		$password = $row['password'];
		$membername = $row['name'];
        $find = mysql_num_rows($res);
        if($newpassword == $newpassword1)
		{		
			if(mysql_query("UPDATE memberdetails SET password='$newpassword' WHERE name='$membername' "));    
		}
 		else 
		{
          echo "<script>
					window.location.href='changepassword.php?a=1';
				</script>";
		}
  };
?>

		 <script>
		 if("<?php echo $sponsor?>" =='yes'){
		 	window.location.href= "sponsorlogin.php";
		 } else {
		 	window.location.href= "adminlogin.php";
		 }
         </script>
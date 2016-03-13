<?php
$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db('goforcork') or die(mysql_error());
//$connection = mysql_connect('localhost','root','') or die(mysql_error());
//$database = mysql_select_db('go4fish') or die(mysql_error());
$shipping_cost= 1.5; 
$taxes= array('VAT' => 12,'Service Tax' => 5);
?>

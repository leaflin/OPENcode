<?php
header("Content-Type: text/html; charset=utf-8");

$q = intval($_GET['q']);

mysql_connect('localhost','root','usbw');
mysql_query("SET NAMES 'utf8'");
mysql_select_db("b32_15818905_757");
$result=mysql_query("SELECT * FROM `students`");
//$myResult=mysql_query("SELECT * FROM `students` WHERE 1");
$sql=mysql_query("SELECT * FROM students WHERE cID ='".$q."'");
while($row=mysql_fetch_assoc($sql)){
	
	echo $row['cName'];
	
	}




?>

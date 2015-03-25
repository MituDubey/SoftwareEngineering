<?php
$gender=$_POST['gender']; 
$profession=$_POST['profession'];
$marital=$_POST['marital'];
$profession=$_POST['profession'];
$marital=$_POST['marital'];
$dead=$_POST['dead'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
mysql_connect("localhost", "root", "MITU") or die(mysql_error()); 
mysql_select_db("mitu") or die(mysql_error());
$result=mysql_query("SELECT name FROM 'whoami' where gender='$gender' AND profession='$profession' AND marital='$marital' AND religion='$religion' AND dead='$dead' AND nationality='$nationality'");


$row = mysql_fetch_array($result,MYSQLI_ASSOC);

echo $row['name'];
mysql_close();
?>
<?php
 $id=$_POST['id'];
  $name=$_POST['name'];
 $gender=$_POST['gender']; 
$profession=$_POST['profession'];
$marital=$_POST['marital'];
$dead=$_POST['dead'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$cartoon=$_POST['cartoon'];
mysql_connect("localhost", "root", "MITU") or die(mysql_error()); 
mysql_select_db("mitu") or die(mysql_error()); 
mysql_query("INSERT INTO whoami(id, name, gender, profession, marital, dead, nationality, religion, cartoon) VALUES('$id', '$name' , '$gender' , '$profession' , '$marital' , '$dead' , '$nationality' , '$religion' , '$cartoon')"); 
Print "You have successfully added a celebrity to our database"; 
?>	



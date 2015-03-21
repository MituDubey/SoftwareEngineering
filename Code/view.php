
<!DOCTYPE html>
</html>
<head><title>ADD A CELEBRITY</title>
</head>
<style type="text/css">
body{ background-color: #8D2222; }
#id1 {color: #8D2222;
font-family: Papyrus,fantasy;
font-size: 50px;}
#id2 {border: groove; border-width: thick; width: 30%; margin-left: 450px; }
#id3 {text-align: justify;margin-top: 20px; margin-left: 20px; margin-bottom: 20px;}
.c2{font-weight:500;}
</style>
<body>
    <br>
<marquee id="id1" bgcolor="yellow"><span class="c2">????????????<span>WHO AM I <span class="c2">?????????????<span></marquee>
<br><br><br><br> 
</body>
</html>
<?php
mysql_connect("localhost", "root", "MITU") or die(mysql_error()); 
mysql_select_db("mitu") or die(mysql_error());
$retval=mysql_query("SELECT name FROM `whoami`;");
echo "Celebrities:";<br>
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "{$row['name']} <br><br> ";
}
mysql_close();
?>

<!DOCTYPE html>
</html>
<head><title>FUN GAMES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{ background-color: #CCCCFF; }
#id1 {color: #CCCCFF;
font-family: Papyrus,fantasy;margin-top: 20px;
font-size: 50px;}
#id2{text-align: justify; margin-left: 50px; margin-top: 20px;}
.id3{text-align: justify; margin-left: 55px; }
.c2{font-weight:500;}
  #cf5 {
    position:relative;
    height:281px;
    width:450px;
    margin:10px auto;
  }
  #cf5 img {
    position:absolute;
    left:0;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
  }

  #cf5 img.top {
    -webkit-transform:scale(1,0);
    -moz-transform:scale(1,0);
    -o-transform:scale(1,0);
    transform:scale(1,0);
    filter: alpha(opacity=0);
    opacity:0;

  }

  #cf5:hover img.top, #cf5.hover_effect img.top {
    opacity:1;
    -webkit-transform:scale(1,1);
    -moz-transform:scale(1,1);
    -o-transform:scale(1,1);
    transform:scale(1,1);
  }

  #cf5:hover img.bottom, #cf5.hover_effect img.bottom {
    filter: alpha(opacity=0);
    -webkit-transform:rotate(360deg) scale(0,0);
    -moz-transform:rotate(360deg) scale(0,0);
    -o-transform:rotate(360deg) scale(0,0);
    transform:rotate(360deg) scale(0,0);
  }
  .submit input { 
    width: auto; 
    padding: 9px 15px; 
    background: #617798; 
    border: 0; 
    font-size: 14px; 
    color: #FFFFFF; -webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    }
</style>
<body>
  <marquee id="id1" bgcolor="#0000FF"><span class="c2">????????????<span>WHO AM I <span class="c2">?????????????<span></marquee>
<br><br>
<div align="center" id="id2">
<br><div id="cf5" class="hover">
    <img class="bottom shadow" src="wai123.jpg" />
    <img class="top shadow" src="whoami.jpg" /> </div>
 
     <form action="register.php" class="id3">   <p class="submit"> <input type="submit" value="Register"> </p> 
</form><br>
    <form action="q1.php" class="id3"> <p class="submit"> <input type="submit" value="Let's Start!!!!!!"> </p>
</form><br>
     <form action="addaceleb1.php" method="get" class="id3">
       <p class="submit"> <input type="submit" value="Add a Celebrity"> </p> 
</form>
     <br>
            <form action="view.php" method="get" class="id3">
               <p class="submit"> <input type="submit" value="View All Celebrities"> </p> 
</form>
   
</div>
</body>
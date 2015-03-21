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
    <br>
<marquee id="id1" bgcolor="yellow"><span class="c2">????????????<span>WHO AM I <span class="c2">?????????????<span></marquee>
<br><br><br><br>
<div align="center" id="id2">
<form action="add.php" method="post" id="id3">
Enter id: <input type="number" name="id"><br><br><br>
Enter name: <input type="text" name="name"><br><br><br>
Gender:<br>
<input type="radio" name="gender" value="M"> Male
<input type="radio" name="gender" value="F"> Female
<br><br><br>
Profession:
<select name="profession">
  <option value="Actor">Actor</option>
  <option value="Singer">Singer</option>
  <option value="Politician">Politician</option>
  <option value="Cricketer">Cricketer</option>
  <option value="Tennis Player">Tennis Player</option>
  <option value="Footballer">Footballer</option>
  <option value="Badminton Player">Badminton Player</option>
</select><br><br><br>
Marital: <select name="marital">
  <option value="M">Married</option>
  <option value="U">Unmarried</option>
  <option value="R">Relationship</option>
</select><br><br><br>
Dead: <select name="dead">
  <option value="Y" >Dead</option>
  <option value="N">Alive</option>
</select><br><br>
Nationality: <input type="text" name="nationality">
 <br><br>
Religion:<br>
<input type="radio" name="religion" value="H"> Hindu<br>
<input type="radio" name="religion" value="M"> Muslim<br>
<input type="radio" name="religion" value="S"> Sikh<br>
<input type="radio" name="religion" value="C"> Christian<br>
<br>
    Cartoon Character:
    <input type="radio" name="cartoon" value="Y"> Yes
<input type="radio" name="cartoon" value="N"> No
  <p class="submit"> <input type="submit" value="submit"> </p> 
    <br>
    
</form>
</div>
</body>
</html>
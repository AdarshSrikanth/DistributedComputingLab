<html>
<head>
<style>
#popup{
visibility :hidden;
background-color:red;
position :absolute;
top:10px;
z-index:100;
height:100px;
width:300px;
}
</style>

</head>
<body bgcolor="antiquewhite">
<center>
<h1> ADD PROFILE</h1>
<br><br>
<form name="f" method="post" action="add.php">

EID                   :<input type="text" name="eid" required><br><br>
ENAME                 :<input type="text" name="ename" required><br><br>

NATURE                :<input type="radio" name="natureofprogram" value="workshop">Workshop
        <input type="radio" name="natureofprogram" value="FDP">FDP
		<input type="radio" name="natureofprogram" value="seminar">Seminar
		<input type="radio" name="natureofprogram" value="presentation">Presentation
		<br><br>CONFERENCE :<input type="radio" name="natureofprogram" value="national">national
		<input type="radio" name="natureofprogram" value="international">international<br><br>
TITLE OF THE PROGRAM  :<input type="text" name="title" required></textarea><br><br>
YEAR:<input type="text" name="year"> <br><br>
<a href="ce\uploadce1.html" ><button type="button" name="up">UPLOAD DOCUMENT</button></a><br><br>
<button type="submit" name="add">ADD</button>
<button type="reset" name="clear">RESET</button>
</form>
<div id="popup">
Record added successfully
</div>
<form method="post" action="sec.html">
<button type="button" name="back"><a href="index.html">BACK </a></button>
</form>
</center>
</body>
</html>
<?php
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="staff_details";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(!$conn){
		echo "Conn error";
	}
	if(isset($_POST['add'])){
		$eid = $_POST['eid'];
		$ename = $_POST['ename'];
		$natureofprogram = $_POST['natureofprogram'];
		$nameofworkshop = $_POST['workshop'];
				$duration = $_POST['duration'];
		$fromdate = $_POST['fromdate'];
				$todate = $_POST['todate'];
		$noofparticipants = $_POST['part'];
		$sponsoringagencies= $_POST['organised'];
		$venue = $_POST['venue'];
		$Resourceperson = $_POST['resource'];
		//sql_part
//		echo $eid;
//		echo $ename;
		$sql = "INSERT INTO programs_conducted(eid, ename, natureofprogram, nameofworkshop , duration,fromdate,todate,venue,noofparticipants,sponsoringagencies,Resourceperson) VALUES('$eid', '$ename', '$natureofprogram', '$nameofworkshop', '$duration','$fromdate','$todate','$venue','$noofparticipants','$sponsoringagencies','$Resourceperson')";
		if(mysqli_query($conn, $sql)) {
			echo "<html><script>alert('Added successfully...');</script></html>";
		}
	}
?>
<html>
<head>
<style>

body{
			background-image:url(download.jpeg);
			background-repeat:no-repeat;
			background-size:cover;
		}
		t{
			font-size:15px;
		}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 14px 30px 6px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 3px solid black;
}

.button1:hover {
    background-color: black;
    color:white;
}

input[type=text] {
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 5px;
}

textarea {
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 5px;
}
input[type=date] {
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 5px;
}
a{
	text-decoration: none;
}
</style>
<script type="text/javascript">
var xmlHttp = new XMLHttpRequest();
function getName(eid) {
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == 0){
		//alert(eid);
	 xmlHttp.open("GET", "getname.php?eid="+eid, true);
	 xmlHttp.onreadystatechange = handleResponse;
	 xmlHttp.send(null);
	 //alert('Sent');
	 }else{
	 }
}
function handleResponse(){
	//alert('Response');
 if(xmlHttp.readyState == 4 || xmlHttp.readyState == 0){
 if(xmlHttp.status == 200){
	var xmlResponse = xmlHttp.responseText;
	//alert('Text: '+xmlResponse);
	if(xmlResponse == 'Error'){
		document.getElementById('name-block').value = '';
		document.getElementById('error-block').innerHTML = 'No such ID exists';
	}
	else{
		document.getElementById('error-block').innerHTML = '';
		document.getElementById('name-block').value = xmlResponse;
	}
 }else{
	alert("something went wrong");
 }
 }
}
</script>
</head>
<body>
<center>
	<h1> Add Details </h1>
<form name="f" method="post" action="">
<br>
<br>
<b>EID</b>     : <input type="text" name="eid" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ENAME</b>   : <input type="text" id="name-block" name="ename" required pattern="[a-z A-Z]+" readonly onfocus="getName(document.f.eid.value)">  <span id="error-block" style="color: red"></span><br><br>

<b>NATURE OF WORKSHOP</b>     : <br />
			              <input type="radio" name="natureofprogram" value="workshop" required/>Guest Lecture <br />
                          <input type="radio" name="natureofprogram" value="FDP"/>Faculty Development Program <br />
		                 <input type="radio" name="natureofprogram" value="seminar"/>Research Seminar <br />
			                  <input type="radio" name="natureofprogram" value="onecreditcourse">Staff Development Program <br />
		                  <input type="radio" name="natureofprogram" value="national">Technical Seminar <br />
		                  <input type="radio" name="natureofprogram" value="international">One Credit Course
	<br/><br>
<b>NAME OF THE WORKSHOP</b>  : <input type="text" name="workshop" required/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>RESOURCE PERSON</b>       : <input type="text" name="resource" required/><br/></br>
<b>DURATION  </b>            : <br/>
                          <input type="radio" name="duration" value="workshop" required/>One day
                          <input type="radio" name="duration" value="FDP"/><t>Two days</t>
		                 <input type="radio" name="duration" value="seminar"/><t>Less than a week</t>
			                  <input type="radio" name="duration" value="onecreditcourse"/><t>One week</t><br/></br>

<b>DATE</b>                  : from <input type="date" name="fromdate" required> to <input type="date" name="todate" required></br><br>
<b>SPONSORING AGENCIES</b>   : <input type="text" name="organised" required pattern="[a-z A-Z]+"/><br/><br>
<b>VENUE</b>                 : <input type="text" name="venue" required pattern="[a-z A-Z]+"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>NUMBER OF PARTICIPANTS</b>: <input type="text" name="part" pattern="[0-9]+" required/><br/><br>

<a href="ce\uploadce1.html"><button class="button button1" type="button" name="up" style="font-size: 10px; border-width: 2px"><b>UPLOAD BROCHURE</b></button></a><br/>
      <button class="button button1" type="submit" name="add">ADD</button>
			<a href="index.html"><button type="button" style="border-radius: 50px; width: 70px; height: 70px"><img src="images/home.png" style="width: 100%"/></button></a>
     <button class="button button1" type="button" name="clear">CLEAR</button>

</form>
</center>
</body>
</html>

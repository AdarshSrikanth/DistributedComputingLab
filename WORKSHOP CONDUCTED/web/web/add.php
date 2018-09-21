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
		$sql = "INSERT INTO programs_attended(eid, ename, natureofprogram, nameofworkshop , duration,fromdate,todate,venue,noofparticipants,sponsoringagencies,Resourceperson) VALUES('$eid', '$ename', '$natureofprogram', '$nameofworkshop', '$duration','$fromdate','$todate','$venue','$noofparticipants','$sponsoringagencies','$Resourceperson')";
		echo mysqli_query($conn, $sql);
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
    margin: 14px 120px 6px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 4px solid black;
}

.button1:hover {
    background-color: black;
    color:white;
}

input[type=text] {
    width: 13%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid black;
    border-radius: 5px;
}

textarea {
    width: 13%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid black;
    border-radius: 5px;
}
input[type=date] {
    width: 13%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid black;
    border-radius: 5px;
}
</style>
</head>
<body>
<center>
<form name="f" method="post" action="">
<br>
<br>
<b>EID</b>     :<input type="text" name="eid" required pattern="[0-9][0-9]"><br>
<b>ENAME</b>   :<input type="text" name="ename" required pattern="[a-z A-Z]+"> <br>

<b>NATURE OF WORKSHOP</b>     :
<br/><br/>
			              <input type="radio" name="natureofprogram" value="workshop"/>Guest Lecture<br/>
                          <input type="radio" name="natureofprogram" value="FDP"/>Faculty Development Program<br/>
		                 <input type="radio" name="natureofprogram" value="seminar"/>Research Seminar<br/>
			                  <input type="radio" name="natureofprogram" value="onecreditcourse">Staff Development Program<br/>
		                  <input type="radio" name="natureofprogram" value="national">Technical Seminar<br/>
		                  <input type="radio" name="natureofprogram" value="international">One Credit Course<br/>
	<br/>
<b>NAME OF THE WORKSHOP</b>  :<input type="text" name="workshop"/><br/>
<b>DURATION  </b>            :<br/>
<br/>
                          <input type="radio" name="duration" value="workshop"/><b>One day</b><br/>
                          <input type="radio" name="duration" value="FDP"/><t>Two days</t><br/>
		                 <input type="radio" name="duration" value="seminar"/><t>Less than a week</t><br/>
			                  <input type="radio" name="duration" value="onecreditcourse"/><t>One week</t><br/></br>
		                 
<b>DATE</b>                  : from<input type="date" name="fromdate" required> to<input type="date" name="todate" required></br>
<b>NUMBER OF PARTICIPANTS</b>:<input type="text" name="part" pattern="[0-9]+"/><br/>
<b>SPONSORING AGENCIES</b>   :<input type="text" name="organised" required pattern="[a-z A-Z]+"/><br/>
<b>VENUE</b>                 :<input type="text" name="venue" required pattern="[a-z A-Z]+"/><br/>
<b>RESOURCE PERSON</b>       :<input type="text" name="resource"/><br/></br>

<a href="ce\uploadce1.html"><button class="button button1" type="button" name="up">UPLOAD BROCHURE</button></a><br/><br/>
      <button class="button button1" type="submit" name="add">ADD</button><br/><br/>
     <button class="button button1" type="button" name="clear">CLEAR</button><br/><br/>

</form>
</center>
</body>
</html>







		
		
		
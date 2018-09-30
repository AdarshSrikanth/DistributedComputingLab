<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	if(isset($_POST['add'])){
		$imagename=$_FILES["image"]["name"];
		$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
		$eid = $_POST['eid'];
		$ename = $_POST['ename'];
				$natureofprogram = $_POST['natureofprogram'];
		$title = $_POST['title'];
				$duration = $_POST['duration'];

		$fromdate = $_POST['fromdate'];
				$todate = $_POST['todate'];
		$organised = $_POST['organised'];$ename = $_POST['ename'];
				$natureofprogram = $_POST['natureofprogram'];
		$title = $_POST['title'];
				$duration = $_POST['duration'];

		$fromdate = $_POST['fromdate'];
				$todate = $_POST['todate'];
		$organised = $_POST['organised'];
		//sql_part
		echo $eid;
		echo $ename;
		$sql = "INSERT INTO programs_attended(eid, ename, natureofprogram, [title],duration,fromdate,todate,organised,imagetmp,imagename) VALUES('$eid', '$ename', '$natureofprogram', '$title', '$duration','$fromdate','$todate','$organised','$imagetmp','$imagename')";
		echo mysqli_query($conn, $sql);
		mysql_query($sql);

	}

?>
<html>
<head><style>
pre{
font-family: Bitstream Vera Sans Mono;
font-size:15;
}
.add{
   position:absolute;
   top:556;

   right:527;
   font-size:250%;
  }
</style></head>
<body background="images/img8.jpg">
<p><b><center><font face="Imprint MT Shadow" size="7px" color="maroon">  PROGRAMS ATTENDED </font> </center></b></p>
</br>
<script>
function myfunc()
{
	alert("Check your informataion before clicking SUBMIT button");
	}
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

<form name="f" method="post" action="get.php" enctype="multipart/form-data">
<pre>
<b>EID  </b>                                            :<input type="text" name="eid" required><br>
<b>ENAME </b>                                     :<input type="text" name="ename" required readonly id="name-block" value="" onfocus="getName(document.f.eid.value)"><span id="error-block" style="color: red"></span><br>
<b>PROGRAM NATURE      </b>        :<input type="radio" name="natureofprogram" value="workshop">Workshop
		                                      <input type="radio" name="natureofprogram" value="FDP">FDP
		                                      <input type="radio" name="natureofprogram" value="seminar">Seminar
		                                      <input type="radio" name="natureofprogram" value="national">National conference
		                                      <input type="radio" name="natureofprogram" value="international">International conference<br>
<b>TITLE OF THE PROGRAM  </b>:<input type="textarea" name="title" required></textarea><br>
<b>DURATION  </b>                             :<input type="radio" name="duration" value="Less thanoneWeek">Less than one week
                                                     <input type="radio" name="duration" value="E">Equal to one week
		                                     <input type="radio" name="duration" value="G">Greater than one week<br>
<b>DATE    </b>                                        :From <input type="date" name="fromdate" required>To <input type="date" name="todate" required><br>
<b>ORGANISED BY </b>                       :<input type="text" name="organised" required><br>
<b>Choose file to upload </b>                    :<input type="file" name="myfile" required> </br>
<center><button type="submit" name="add" onClick="myfunc()">SUBMIT</button> &nbsp; &nbsp;&nbsp; <button type="button" name="clear">CLEAR</button></center>
</pre>
</form>
<div class="add" style="float: left">
<form action="index.html">
<center><button style="border-radius: 50px; width: 70px; height: 70px"><img src="images/home.png" style="width: 100%"/></button></center>
</form>
</div>
<!--<div class="add">
<a href="index.html">Home</a>
</div>-->
</body>
</html>

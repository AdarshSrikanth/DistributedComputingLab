<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";

	$con=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$eid=$_POST['eid'];
	$query1="SELECT ename from programs_attended where eid='$eid'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$ename=$arrayresult1['ename'];

	$query1="SELECT title from programs_attended where eid='$eid'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$title=$arrayresult1['title'];

	$query1="SELECT fromdate from programs_attended where eid='$eid'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$fromdate=$arrayresult1['fromdate'];

	$query1="SELECT todate from programs_attended where eid='$eid'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$todate=$arrayresult1['todate'];

	$query1="SELECT organised from programs_attended where eid='$eid'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$organised=$arrayresult1['organised'];


	if(isset($_POST['submit']))
	{
		$ename = $_POST['ename'];
		$natureofprogram = $_POST['natureofprogram'];
		$title = $_POST['title'];
		$duration = $_POST['duration'];
		$fromdate = $_POST['fromdate'];
		$todate = $_POST['todate'];
		$organised = $_POST['organised'];

		$sql1 = "update programs_attended set ename='$ename' where eid='$eid'";
		if ($con->query($sql1) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql2 = "update programs_attended set natureofprogram='$natureofprogram' where eid='$eid'";
		if ($con->query($sql2) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql3 = "update programs_attended set title='$title' where eid='$eid'";
		if ($con->query($sql3) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql4 = "update programs_attended set duration='$duration' where eid='$eid'";
		if ($con->query($sql4) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql5 = "update programs_attended set fromdate='$fromdate' where eid='$eid'";
		if ($con->query($sql5) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql6 = "update programs_attended set todate='$todate' where eid='$eid'";
		if ($con->query($sql6) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}

		$sql7 = "update programs_attended set organised='$organised' where eid='$eid'";
		if ($con->query($sql7) === TRUE)
		{
			echo "Record updated successfully";
		}
		else
		{
			echo "Error updating record: " . $con->error;
		}
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
   top:587;

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
</script>
<h2>Welcome <?php echo $eid;?></h2>
<form method="post" action="get1.php" >
<pre>
<b>EID  </b>                                            :<input type="text" name="eid" value="<?php echo $eid;?>" required><br>

<b>ENAME </b>                                     :<input type="text" name="ename" value="<?php echo $ename;?>" required><br>

<b>PROGRAM NATURE      </b>        :<input type="radio" name="natureofprogram" value="workshop">Workshop
		                                      <input type="radio" name="natureofprogram" value="FDP">FDP
		                                      <input type="radio" name="natureofprogram" value="seminar">Seminar
		                                      <input type="radio" name="natureofprogram" value="national">National conference
		                                      <input type="radio" name="natureofprogram" value="international">International conference<br>
<b>TITLE OF THE PROGRAM  </b>:<input type="textarea" name="title" value="<?php echo $title;?>" required></textarea><br>
<b>DURATION  </b>                             :<input type="radio" name="duration" value="Less thanoneWeek">Less than one week
                                                     <input type="radio" name="duration" value="E">Equal to one week
		                                     <input type="radio" name="duration" value="G">Greater than one week<br>
<b>DATE    </b>                                        :From <input type="date" name="fromdate" value="<?php echo $fromdate;?>" required>To <input type="date" name="todate" value="<?php echo $fromdate;?>" required><br>
<b>ORGANISED BY </b>                       :<input type="text" name="organised" value="<?php echo $organised;?>" required><br>
<b>Choose file to upload </b>                    :<input type="file" name="myfile" required> </br>
<center><button type="submit" name="add" onClick="myfunc()">SUBMIT</button> &nbsp; &nbsp;&nbsp; <button type="button" name="clear">CLEAR</button></center>
</pre>
</form>
<br>
<div class="add">
<form action="index.html">
<center><button style="border-radius: 50px; width: 70px; height: 70px"><img src="images/home.png" style="width: 100%"/></button></center>
</form>
</div>
<!--<div class="add">
<a href="index.html">Home</a>
</div>-->
</body>

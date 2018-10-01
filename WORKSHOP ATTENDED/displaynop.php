<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$var=$_GET['nop'];
	/*echo "title seleected is ";
	echo $var;*/
	if($file=fopen("file2.txt","w"))
		echo "";
	else
		echo "no";
	$sql="SELECT * FROM programs_attended WHERE title='$var'";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		echo "Not Displayed";
	//echo "<br/>";
	echo "<h2>Staff Details</h2>";
	while($r=mysqli_fetch_array($retval))
	{
		echo "Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:";
		//echo "Employee ID &nbsp;&nbsp;&nbsp;:";
		echo "<b>";
		echo $r['eid'];echo "<br/>";
		echo "</b>";
		echo "Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
		echo "<b>";
		echo $r['ename'];echo "<br/>";
		echo "</b>";
		echo "Nature of Program &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
		echo "<b>";
		echo $r['natureofprogram'];echo "<br/>";
		echo "</b>";
		echo "Title of Workshop &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
		echo "<b>";
		echo $r['title'];echo "<br/>";
		echo "</b>";
		echo "Duration of workshop &nbsp;&nbsp;: ";
		echo "<b>";
		echo $r['duration'];echo "<br/>";
		echo "</b>";
		echo "From Date   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ";
		echo "<b>";
		echo $r['fromdate'];echo "<br/>";
		echo "</b>";
		echo "To Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
		echo "<b>";
		echo $r['todate'];echo "<br/>";
		echo "</b>";
		echo "Organised by &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ";
		echo "<b>";
		echo $r['organised'];echo "<br/>";
		//echo "</h3>";
		echo "</br>";
		echo "</b>";

		$s=$r['eid'].";".$r['ename']."\r\n";//\n';
		fputs($file,$s) or die("Data not written ");

		/*$s=$r['eid'].";".$r['ename']."\r\n";
		echo "<br/>";//.";".$fromdate.";".$todate.";".$organised;
		//fputs*/
		//fputs($file,$s) or die("Data not written ");
		//fputs("\n");


	}

	// or die("file1 not found");
/*while($r=mysqli_fetch_array($retval))
	{
		echo $r['eid'];
		echo $r['ename'];

		$s=$r['eid'].";".$r['ename'];//.";".$fromdate.";".$todate.";".$organised;
		fputs($file,$s) or die("Data not written ");

	}*/

	/*$query1="SELECT eid from programs_attended where title='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult=mysqli_fetch_array($result1);
	$eid=$arrayresult['eid'];

	$query1="SELECT ename from programs_attended where title='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$ename=$arrayresult1['ename'];
	$file=fopen("file1.txt","w") or die("file1 not found");
     // $s=$currentDateTime.";".$ant.";".$cc1;
      $s=$natureofprogram.";".$title.";".$fromdate.";".$todate.";".$organised;
  // $s=$arrayresult1['equipmentname'].";".$arrayresult1['make'].";".$arrayresult1['model'].";".$arrayresult1['id'].";".";";
   fputs($file,$s) or die("Data not written ");*/
   fclose($file);
	mysqli_close($conn);

?>

<html>
<head>
<title>Display</title>
<style>
.add{
   position:absolute;
   top:10;
   left-300;
   right:30;

   font-size:150%;
  }
  .add1{
   position:absolute;
   top:10;
   left-300;

   right:130;
   font-size:150%;
  }
</style>
</head>
<body background="images/img8.jpg">
<a href="report2.php"><h2>click to generate report</h2></a>
<div class="add">
	<center><a href="Search2.html"><button style="border-radius: 50px; width: 70px; height: 70px"><img src="images/back.png" style="width: 100%"/></a></button></center>
	</div>
	<div class="add1">
	<center><a href="index.html"><button style="border-radius: 50px; width: 70px; height: 70px"><img src="images/home.png" style="width: 100%"/></a></button></center>
</div>
</body>
</html>

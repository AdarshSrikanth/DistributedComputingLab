<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$var=$_GET['nop'];
	echo $var;
	$file=fopen("file1.txt","w") or die("file1 not found");
	$sql="SELECT * FROM programs_attended WHERE natureofprogram='$var'";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		echo "Not Displayed";
	echo "<h2>Staff Details</h2>";//echo "<br/>";;
	while($r=mysqli_fetch_array($retval))
	{
		//echo "<h3>";
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
		echo "</b>";
		//echo "</h3>";
		echo "</br>";
      $s=$r['natureofprogram'].";".$r['title'].";".$r['fromdate'].";".$r['todate'].";".$r['organised']."\r\n";
 fputs($file,$s) or die("Data not written ");
		
		
	}
	echo "<br/>";
	//echo "hi";
	/*while($r=mysqli_fetch_array($retval))
	{
	 echo "hello";
	 echo "<table>
	 <tr><td>".$r['eid']."</td></tr>
	 <tr><td>".$r['ename']."</td></tr>
	 <tr><td>".$r['natureofprogram']."</td></tr>
	 <tr><td>".$r['title']."</td></tr>	 
	 <tr><td>".$r['duration']."</td></tr>	 
	 <tr><td>".$r['fromdate']."</td></tr>	 
	 <tr><td>".$r['todate']."</td></tr>	 
	 <tr><td>".$r['organised']."</td></tr>
     </table>";	 
	 
	 
	 
      $s=$r['natureofprogram'].";".$r['title'].";".$r['fromdate'].";".$r['todate'].";".$r['organised']."\r\n";
 fputs($file,$s) or die("Data not written ");*
		
	}*/
	
	$query1="SELECT natureofprogram from programs_attended where eid='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$natureofprogram=$arrayresult1['natureofprogram'];
	
	$query1="SELECT title from programs_attended where eid='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$title=$arrayresult1['title'];
	
		$query1="SELECT fromdate from programs_attended where eid='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$fromdate=$arrayresult1['fromdate'];
	

	
	
			$query1="SELECT todate from programs_attended where eid='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$todate=$arrayresult1['todate'];
   
   $query1="SELECT organised from programs_attended where eid='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$organised=$arrayresult1['organised'];
  // $model="3";
   
  
   /*$file=fopen("file1.txt","w") or die("file1 not found");
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
<!--<h2>Staff Details</h2>-->

<a href="report.php"><h2>click to generate report</h2></a>
<div class="add">
<a href="search4.html">BACK</a>
</div>
<div class="add1">
<a href="index.html">HOME</a>
</div>
</body>
</html>

<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$var=$_POST['nop'];
	$var1=$_POST['eid'];
	$sql="SELECT * FROM programs_attended WHERE eid='$var1' AND natureofprogram='$var'";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		echo "Not Displayed";
	while($r=mysqli_fetch_array($retval))
	{
		echo $r['eid'];
		echo $r['ename'];
		echo $r['natureofprogram'];
		echo $r['title'];
		echo $r['duration'];
		echo $r['fromdate'];
		echo $r['todate'];
		echo $r['organised'];

		echo "</br>";
		
		
	}
	$query1="SELECT eid from programs_attended where title='$title'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$natureofprogram=$arrayresult1['eid'];
	
	$query1="SELECT ename from programs_attended where title='$title'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$title=$arrayresult1['ename'];
	
		
  
   $file=fopen("file2.txt","w") or die("file1 not found");
     // $s=$currentDateTime.";".$ant.";".$cc1;
      $s=$eid.";".$ename;//.";".$fromdate.";".$todate.";".$organised;
  // $s=$arrayresult1['equipmentname'].";".$arrayresult1['make'].";".$arrayresult1['model'].";".$arrayresult1['id'].";".";";
   fputs($file,$s) or die("Data not written ");
   fclose($file);
   
   
   
	
	mysqli_close($conn);

?>
<html>
<head>
<title>Display</title>
</head>
<body>
<a href="report.php">click to generate report</a>
</body>
</html>
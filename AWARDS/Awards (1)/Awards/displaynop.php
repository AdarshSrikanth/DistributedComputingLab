<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'award');
	$var=$_POST['nop'];
	$file=fopen("file1.txt","w") or die("file1 not found");
	$sql="SELECT * FROM detail WHERE nature='$var'";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		echo "Not Displayed";
	while($r=mysqli_fetch_array($retval))
	{
		echo $r['eid'];
		echo "</br>";
		echo $r['ename'];
		echo "</br>";
		echo $r['nature'];
		echo "</br>";
		echo $r['title'];
		echo "</br>";
		echo $r['year'];
		
		echo "</br>";
      $s=$r['ename'].";".$r['nature'].";".$r['title'].";".$r['year']."\r\n";
 fputs($file,$s) or die("Data not written ");
		
		
	}
	
	$query1="SELECT ename from detail where nature='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$nature=$arrayresult1['ename'];
	
	$query1="SELECT nature from detail where nature='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$natureofprogram=$arrayresult1['nature'];
	
	$query1="SELECT title from detail  where nature='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$title=$arrayresult1['title'];
	
		$query1="SELECT year from detail where nature='$var'";
   $result1=$conn->query($query1);
   if(!$result1)
   {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$fromdate=$arrayresult1['year'];
	

	
//   fputs($file,$s) or die("Data not written ");
   fclose($file);
   
   
   
	
	mysqli_close($conn);

?>
<html>
<head>
<title>Display</title>
</head>
<body >	
<a href="report.php">click to generate report</a>
</body>
</html>

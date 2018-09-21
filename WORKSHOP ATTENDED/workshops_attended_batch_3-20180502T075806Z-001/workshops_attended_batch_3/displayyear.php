<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$year=$_POST['year'];
	$sql="SELECT * FROM programs_attended WHERE YEAR(fromdate)='$year' ORDER BY date DESC";
	$retval=mysqli_query($conn,$sql);
	if(!retval)
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
	
	mysqli_close($conn);

?>

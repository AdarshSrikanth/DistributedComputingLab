<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	//$var=$_POST['eid'];
	//$file=fopen("file1.txt","w") or die("file1 not found");
	$sql="SELECT * FROM programs_attended";// WHERE eid='$var'";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
		echo "Not Displayed";
	while($r=mysqli_fetch_array($retval))
	{
		/*echo $r['eid'];
		echo $r['ename'];
		/*echo $r['natureofprogram'];
		echo $r['title'];
		echo $r['duration'];
		echo $r['fromdate'];
		echo $r['todate'];*/
		echo $r['imagetmp'];

		echo "</br>";
      
	}
	
	
	
	mysqli_close($conn);

?>
<html>
<head>
<title>Display</title>

</body>
</html>

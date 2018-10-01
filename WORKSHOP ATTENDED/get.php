<?php
$dbhost = "localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="staff_details";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(isset($_POST['add'])){
		$imagename=$_FILES["myfile"]["name"];
		$imagetmp=addslashes (file_get_contents($_FILES['myfile']['tmp_name']));
		$eid = $_POST['eid'];
		$ename = $_POST['ename'];
				$natureofprogram = $_POST['natureofprogram'];
		$title = $_POST['title'];
				$duration = $_POST['duration'];
		$fromdate = $_POST['fromdate'];
				$todate = $_POST['todate'];
		$organised = $_POST['organised'];
		//sql_part
		echo "Welcome ";
		echo "<b>";
		echo $ename;

		echo "<br/>";
		echo "</b>";
		$sql = "INSERT INTO programs_attended(eid, ename, natureofprogram, title,duration,fromdate,todate,organised,imagetmp,imagename) VALUES('$eid', '$ename', '$natureofprogram', '$title', '$duration','$fromdate','$todate','$organised','$imagetmp','$imagename')";
		if(mysqli_query($conn, $sql)){
			echo "Your Data has been successfully registered !";
		}
		else{
			echo "<font color='red'><center> No such ID exists </center></font>";
		}


	}
	?>
	<html>
	<head>
	</head>

	<body background="images/img8.jpg">
	</body>
	</html>

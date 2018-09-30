<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
  $eid = $_GET['eid'];
  $sql = "SELECT name FROM staff WHERE eid = '".$eid."'";
  $res = mysqli_query($conn, $sql);
  $res = mysqli_fetch_array($res);
  if($res['name']==''){
    echo 'Error';
  }
  else{
    echo $res['name'];
  }
?>

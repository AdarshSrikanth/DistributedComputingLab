<?php

    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'staff_details';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
		echo "no";
       die("Connection failed: " . $db->connect_error);
    }
    $eid = $_GET['id'];
	$ename=$_GET['ename'];
    $title = $_GET["title"];

	echo "hello";
	echo $eid,$ename,$title;
    $result = $db->query("SELECT imagetmp FROM programs_attended WHERE ename = '$ename' and title = '$title' and eid='$eid'");
   
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpeg"); 
        echo $imgData['image']; 
    }else{
        echo 'Certificate not found...';
    }
	
	/*$db="SELECT imagetmp FROM programs_attended WHERE ename = '$ename' and title = '$title' and eid='$eid'";
	$result=mysql_query("$db");
	$row=mysql_fetch_assoc($result);
	//mysql_close($link);
	header("Content-type: image/jpeg"); 
        echo $row['imagetmp']; */
	

?>
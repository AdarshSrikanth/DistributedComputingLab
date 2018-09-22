<?php
session_start();
$db= new mysqli('localhost','Adarsh',"",'FundedProject');
if($db->connect_error){
	die("Connection failed: " . $db->connect_error);
}

if(isset($_POST["submit"])){
	$ff=$_POST['name'];
	$ll=$_POST['title'];
	$ee=$_POST['name1'];
	$pp=$_POST['title1'];
	$bb=$_POST['pfrom'];
	$rr=$_POST['pto'];
	$sr=$_POST['ugc'];

	$numrows = 0;
	//mysqli_select_db('fproject') or die("cannot select DB");
	$sql = "SELECT * FROM consult WHERE fname='".$ff."'";
	if($query=mysqli_query($db,$sql)){
		$numrows=mysqli_num_rows($query);
	}

	$pdf = $_FILES['pdf']['tmp_name'];
	$file_type = $_FILES['pdf']['type'];
	$file_name = $_FILES['pdf']['name'];

	echo $file_name;

	if($numrows==0)
	{
		echo "inside 1st If";
		if($file_name!=""){
			echo "Inside 2nd if";
		  $data=mysqli_real_escape_string($db, file_get_contents($pdf));
			$sql="INSERT INTO consult(name,title,company,amount,fromd,tood,status,file) VALUES('$ff','$ll','$ee','$pp','$bb','$rr','$sr','$data')";
			$result=mysqli_query($db,$sql);
			if($result){
				echo '<h3>Successfully added</h3>';
			} else {
				echo "Failure!";
			}
		}
		else{
			echo "Inside else";
			$sql="INSERT INTO consult(name,title,company,amount,fromd,tood,status) VALUES('$ff','$ll','$ee','$pp','$bb','$rr','$sr')";
			$result=mysqli_query($db,$sql);
			if($result){
				echo '<h3>Successfully added</h3>';
			} else {
				echo "Failure!";
			}
		}
	}
	else {
		echo "That username already exists! Please try again with another.";
	}
}

$target_dir = "Papers/";
$uploadOk = 1;
$target_file = $target_dir.basename($_FILES["pdf"]["name"]);
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$ext = $info['extension']; // get the extension of the file
  if (move_uploaded_file($_FILES["paper"]["tmp_name"], $target_file)) {
    echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
//header( "Location: index.php");
?>

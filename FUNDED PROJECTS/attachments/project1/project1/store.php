<?php
session_start();
$db= mysqli_connect('localhost','Adarsh',"","FundedProject");
if(isset($_POST["submit"]))
{
	$ff=$_POST['name'];
	$ll=$_POST['fname'];
	$ee=$_POST['title'];
	$pp=$_POST['amt'];
	$bb=$_POST['pfrom'];
	$rr=$_POST['pto'];
	$sr=$_POST['ugc'];


	//mysqli_select_db('fproject') or die("cannot select DB");
	$numrows = 0;
	$sql = "SELECT * FROM funded WHERE fname='".$ff."'";
	if($query=mysqli_query($db,$sql)){
		$numrows=mysqli_num_rows($query);
	}

		$pdf = $_FILES['pdf']['tmp_name'];
		$file_type = $_FILES['pdf']['type'];
		$file_name = $_FILES['pdf']['name'];

		echo $file_name;

		if($numrows==0)
		{
			//echo "inside 1st If";
			if($file_name!=""){
				//echo "Inside 2nd if";
			  $data=mysqli_real_escape_string($db, file_get_contents($pdf));
				$sql="INSERT INTO funded(name,facultyname,title,amount,sfrom,sto,status,type,File) VALUES('$ff','$ll','$ee','$pp','$bb','$rr','$sr',"Individual",'$data')";
				$result=mysqli_query($db,$sql);
				if($result){
					echo '<h3>Successfully added</h3>';
				} else {
					echo "Failure!";
				}
				}
				else{
				echo "Inside else";
				$sql="INSERT INTO funded(name,facultyname,title,amount,sfrom,sto,status,type) VALUES('$ff','$ll','$ee','$pp','$bb','$rr','$sr',"Individual")";
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
$target_dir = "Papers/funded/Individual/";
$target_file = $target_dir.basename($_FILES["pdf"]["name"]);
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$ext = $info['extension']; // get the extension of the file
  if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
    echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
header( "Location: index.php");
?>

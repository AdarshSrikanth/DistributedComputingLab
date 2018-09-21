

<?php
session_start();
$db= mysqli_connect('localhost','root','root','fproject');
if(isset($_POST["submit"])){
{	
	$ff=$_POST['name'];
	$ll=$_POST['fname'];
	$ee=$_POST['title'];
	$pp=$_POST['amt'];
	$bb=$_POST['pfrom'];
	$rr=$_POST['pto'];
	$sr=$_POST['ugc'];

	
	//mysqli_select_db('fproject') or die("cannot select DB");

	$query=mysqli_query("SELECT * FROM funded WHERE fname='".$ff."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO funded(name,facultyname,title,amount,sfrom,sto,status) VALUES('$ff','$ll','$ee','$pp','$bb','$rr','$sr')";

	$result=mysqli_query($db,$sql);


	if($result){
	echo " Successfully Inserted";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} 
}
?>














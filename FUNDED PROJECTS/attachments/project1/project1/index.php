<!DOCTYPE html>
<?php?>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>Projects</title>
     <style type="text/css">

     </style>
</head>
<body>
  <center><h1>Funded Projects</h1></center>
  <hr>
<section>
  <button class='lined thick' onclick="javascript:publish()">Add a Project</button>
  <button class='lined thick' onclick="javascript:view()">Generate Report</button>
</section>

</body>
<script>
function publish()
{
  window.top.location='publish.php';
}
function view()
{
  window.top.location='view.php';
}

  </script>


<?php
if(isset($_POST["submit"])){

if(!empty($_POST['f']) && !empty($_POST['l']) && !empty($_POST['e']) && !empty($_POST['p']) && !empty($_POST['b']) && !empty($_POST['r'])) {
	$ff=$_POST['f'];
	$ll=$_POST['l'];
	$ee=$_POST['e'];
	$pp=$_POST['p'];
	$bb=$_POST['b'];
	$rr=$_POST['r'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('fb') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE fname='".$ff."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(fname,lname,pwd,email,bday,gender) VALUES('$ff','$ll','$pp','$ee','$bb','$rr')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>
</html>

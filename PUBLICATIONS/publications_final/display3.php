<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style5.css">
	<title>Publication Details</title>
	<style type="text/css">

.button {
  width:150px;
  border-radius: 4px;
  background-color:#d55555;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 17px;
  padding: 10px;

  transition: all 0.5s;
  cursor: pointer;
  margin-left:0px;
}
.button:hover
{
 box-shadow: 3px 3px tomato;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -15px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
  <div class="login-page">
  <div class="form">
  	<a href="nature.php"> <button type="button" name="submit" class="button" style="float:left;"><span>Go Back</span></button></a><br><br/>

<?php
session_start();
$db= mysqli_connect('localhost',"Adarsh","",'Publication');
$sql="";
$tname=$_POST["nature"];
$sql="SELECT * FROM journal_details WHERE nature='$tname'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
	{
		// echo "qwerty";
		while($row=mysqli_fetch_array($result))
			{

				echo "<div id='mainbox'>
					<div class='card'>
  					<img src='images/profile_pic.jpg' alt='' />
  					";
  					//echo $name;
  					//echo"</h1>";

						echo"<table>";
						echo "<th></th>";
						echo "<th></th>";

				echo "<br/>";
				//echo"<pre>Precedence     :";echo $b=$row['precedence']; echo"</pre>";
				echo "<tr>";
			echo"<td>Author Name</td>"; echo "<td>".$row['name']."</td>"; echo"<tr/>";
			echo "<tr>";echo"<td>Title of Paper</td>";echo "<td>".$row['title']."</td>";echo"<tr/>";
			echo "<tr>";echo"<td>Name of journal</td>";echo "<td>".$row['journal']."</td>"; echo"<tr/>";
			echo "<tr>";echo"<td>Year</td>";echo "<td>".$row['year']."</td>"; echo"<tr/>";
				/*echo"<pre>Voluem No         :";echo $f=$row['volume']; echo"</pre>";
				echo"<pre>Issue No             :";echo $g=$row['issue']; echo"</pre>";
				echo"<pre>Start Page          :";echo $h=$row['pfrom']; echo"</pre>";
				echo"<pre>End Page           :";echo $i=$row['pto']; echo"</pre>";
				//echo"<pre>ISSN OR ISSD No:";echo $j=$row['issn']; echo"</pre>";
				echo"<pre>Month               :";echo $k=$row['month']; echo"</pre>";*/
				//echo $_SESSION["from"];
				//echo"<pre>UGC            :";echo $m=$row['ugc']; echo"</pre>";
				//echo"<pre>SIJ            :";echo $n=$row['sij']; echo"</pre>";
				echo "</table>";
						echo"</div>
						</div>";
			}
}
else
{
	echo"<script type='text/javascript'>alert('No Records Found')</script>";
	echo"<script type='text/javascript'>window.top.location='index.php';</script>";
}

?>
</div>
</div>
</body>
</html>

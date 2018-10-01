<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style2.css">

	<title></title>
	<style>

</style>
</head>
<body>


<?php
$tname=$_POST["tablename"];
//echo $tname;
$db= mysqli_connect('localhost','root','root','fproject');
$sql="SELECT * FROM funded WHERE name='$tname'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
	{
		// echo "qwerty";
		while($row=mysqli_fetch_array($result))
			{

				echo "<div id='mainbox'>
					<div class='card'>
  					<img src='http://media.npr.org/assets/news/2009/10/27/facebook1_sq-17f6f5e06d5742d8c53576f7c13d5cf7158202a9.jpg?s=16' alt='' />
  					<h1>";
  					echo $tname;
  					echo"</h1>";

						
				echo"<pre>Title of the Project             :";echo $a=$row['title']; echo"</pre>";
			
				//echo"<pre>UGC            :";echo $m=$row['ugc']; echo"</pre>";
				//echo"<pre>SIJ            :";echo $n=$row['sij']; echo"</pre>";
				
						echo"</div>
						</div>";
			}
}
//echo"<script type='text/javascript'>window.top.location='list_table.php';</script>";
?>
</body>
</html>

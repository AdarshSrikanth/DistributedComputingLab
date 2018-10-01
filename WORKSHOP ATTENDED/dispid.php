<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
	$query1="SELECT eid FROM programs_attended";
	$shouts=mysqli_query($conn,$query1);
?>
<html>
<body background="images/img..jpg">
<br> <center>
<form action="displayid.php" method="post">
<!--<input type="text" name="eid" placeholder="Emp id" />-->

<?php $query1="SELECT eid FROM staff_details";
	$shouts=mysqli_query($conn,$query1); ?>

 MASTER EQUIPMENT 1        :<select name="eid" >
			<?php while($row=mysqli_fetch_assoc($shouts)) : ?>
					<?php
					$cc=$row['eid'];
					//echo $cc;
					//$cc1=$row['equipmentname'];
					
					?>
					<option value=<?php echo "hello";?>>
					</option>
			 <?php endwhile; ?>
			</select>
			<br/>
		
			
<button type="submit">Search</button> </center>
</form>
</body>
</html>
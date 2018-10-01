<?php
   $con=mysqli_connect("localhost","root","","calibration_testing");
 if(mysqli_connect_errno())
 {
	 echo 'Failed to connect to MySql : '.mysqli_connect_error();
 }
 $error=" ";

 $check=0;
if(isset($_POST['submit']))
{
	$equipmentno=mysqli_real_escape_string($con, $_POST['equipmentno']);
	$procedureno=mysqli_real_escape_string($con, $_POST['procedureno']);
	$equipmentname=mysqli_real_escape_string($con, $_POST['equipmentname']);
	$make=mysqli_real_escape_string($con, $_POST['make']);
	$modelno=mysqli_real_escape_string($con, $_POST['modelno']);
	$labname=mysqli_real_escape_string($con, $_POST['labname']);
	$tc=mysqli_real_escape_string($con, $_POST['tc']);
	$calibdate=mysqli_real_escape_string($con, $_POST['calibdate']);
	$expirydate=mysqli_real_escape_string($con, $_POST['expirydate']);
	$m1=mysqli_real_escape_string($con, $_POST['m1']);
	$m2=mysqli_real_escape_string($con, $_POST['m2']);
	$m3=mysqli_real_escape_string($con, $_POST['m3']);
	$id=mysqli_real_escape_string($con, $_POST['id']);
	
	echo "hello";
echo $m1;	
		
		$query ="INSERT INTO uuc (equipmentno,procedureno,equipmentname,make,modelno,labname,tc,calibdate,expirydate,m1,m2,m3,id) 
		VALUES ('$equipmentno','$procedureno','$equipmentname','$make','$modelno','$labname','$tc','$calibdate','$expirydate','$m1','$m2','$m3','')";
		
		if(!mysqli_query($con ,$query))
		{
			//header ("Location : login.php");
			die('Error :'.mysqli_error($con));
		}
		else
		{
			$_SESSION['login_user'] = $username;
			//echo "aaaaa";
			header ('Location:tabledisplay.php');
			exit();
		}
	//}
}
$query1="SELECT equipmentno,equipmentname from hequipment";
	 $shouts=mysqli_query($con,$query1); 
?>

<?php 
 
   $con=mysqli_connect("localhost","root","","calibration_testing");
 
 if(mysqli_connect_errno())
 {
	 echo 'Failed to connect to MySql : '.mysqli_connect_error();
 }
 ?>
<?php
	$query = "SELECT * FROM uuc";
	$users = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ADD UUC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
	#do{
		text-align:center;
		font-family: 'Open Sans Condensed', sans-serif;
		letter-spacing: 1px;
		font-size: 20px;
		color: black;
		text-shadow: 3px 3px 10px #000;
	}
	</style>
</head>

    <body>
      <form  method="post">
      <br/><br/><br/>
        <h1>ADD AN UUC</h1>
        <br/>
        <fieldset>
          <legend><span class="number">1</span></legend>
          <label for="name">ID/SL   NO</label>
          <input type="text" id="name" name="equipmentno">
             <!--<label for="name">ID/ S.NO OF UUC:</label>
          <input type="text" id="password" name="id">-->
		       <label for="name">EQUIPMENT NAME:</label>
          <input type="text" id="password" name="equipmentname">
          <label for="name">PROCEDURE NUMBER</label>
          <input type="text" id="mail" name="procedureno">
          
     
		  
		  <label for="text">MAKE:</label>
          <input type="text" id="password" name="make">
		   <label for="name">MODEL:</label>
          <input type="text" id="password" name="modelno">
		  
		  <label for="name">LAB NAME OF CALIBRATION:</label>
          <input type="text" id="password" name="labname">
		    <label for="name">TRACEABILITY CERTIFICATE :</label>
          <input type="text" id="password" name="tc">
		   <label for="name">CALIB DATE:</label>
          <input type="date" id="password" name="calibdate">
		   <label for="name">EXPIRY DATE:</label>
          <input type="date" id="password" name="expirydate">
		
		  MASTER EQUIPMENT 1        :<select name="m1" >
			<?php while($row=mysqli_fetch_assoc($shouts)) : ?>
					<?php
					$cc=$row['equipmentno'];
					$cc1=$row['equipmentname'];
					
					?>
					<option value=<?php echo $row['equipmentname'];?>>&nbsp;&nbsp; <?php echo $cc=$row['equipmentname']; echo "---"; echo $cc1=$row['equipmentno'];?> &nbsp;</option>
			 <?php endwhile; ?>
			</select>
			<br/>
			<?php $query1="SELECT equipmentno,equipmentname from hequipment";
			$shouts=mysqli_query($con,$query1); ?>
MASTER EQUIPMENT 2        :<select name="m2" >
			<?php while($row=mysqli_fetch_assoc($shouts)) : ?>
					<?php
					$cc=$row['equipmentno'];
					$cc1=$row['equipmentname'];
					?>
					
					<option value=<?php echo $row['equipmentname'];?>>&nbsp;&nbsp; <?php echo $cc; echo "---"; echo $cc1;?> &nbsp;</option>
			 <?php endwhile; ?>
			</select>
			<br/>
			<?php $query1="SELECT equipmentno,equipmentname from hequipment";
			$shouts=mysqli_query($con,$query1); ?>
MASTER EQUIPMENT 3        :<select name="m3" >
			<?php while($row=mysqli_fetch_assoc($shouts)) : ?>
					<?php
					$cc=$row['equipmentno'];
					$cc1=$row['equipmentname'];
					?>
					<option value=<?php echo $row['equipmentname'];?>>&nbsp;&nbsp; <?php echo $cc; echo "---"; echo $cc1;?> &nbsp;</option>
			 <?php endwhile; ?>
			</select>
			<br/>
			<?php $query1="SELECT equipmentno,equipmentname from hequipment";
			$shouts=mysqli_query($con,$query1); ?>
			
           </fieldset>
        <button type="submit" name="submit" value="submit" >ADD</button>
      </form>
	  <div id="do">
				 <?php 
					if($check==0)
						echo $error; 
				?>
	 </div>


</body>

</html>

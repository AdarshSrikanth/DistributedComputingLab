<?php

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style1.css">
	<title></title>
	<style type="text/css">

	.button {
		width:150px;
		border-radius: 4px;
		background-color:#ee5555;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 17px;
		padding: 10px;

		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
	}
	.button:hover
	{
		box-shadow: 3px 3px black;
		width: 160px;
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
	.add{
		position:absolute;
		top:0;
		left-300;
		right:0;
		font-size:250%;

	}
</style>
</head>
<body>
	<center><h1>Funded Projects</h1></center>
	<hr>
	<a href="view.php"> <button class="button" type="button" name="submit" style="float:left;"><span>Go Back</span></button></a>
	<div class="container">
		<form method="post" action="report9.php">
			<h3>Status</h3>
			<div class="input-group input-group-icon">
				<select name="status" size="1" style="width:100%;" placeholder="Select status" required>
				<?php
						$conn = new mysqli("localhost", "Adarsh", "",'FundedProject');
						$query = "SELECT distinct(status) from funded UNION SELECT distinct(status) from consult";
						$status = $conn->query($query);
						foreach ($status as $s){
								echo '<option value='.$s['status'].'>'.$s['status'].'</option>';
						}
				?>
			</select>
		</div>
		<div class="input-group input-group-icon">
			<h3>Type Of Project</h3>
			<select name="type" size="1" style="width:100%;" placeholder="Select status" required>
				<option value="consultancy">Consultancy</option>
				<option value="funded">Funded</option>
				<option value="both">Both</option>
			</select>
		</div>
				<center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>
			</div>
		</form>
	</div>
</body>
</html>

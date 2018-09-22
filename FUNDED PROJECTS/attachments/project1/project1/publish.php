<?php

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style1.css">
	<title>Funded Projects</title>
	<style type="text/css">

	.button {
		width:150px;
		border-radius: 4px;
		background-color:red;
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
	<a href="index.php"> <button type="button" name="submit" style="float:left;"><span>Go Back</span></button></a>
	<div class="container">
		<form method="post" action="store.php">
			<div class="row">
				<center><h3>Project Details</h3></center>
				<div class="col-half">
					<h4>Nature of Project</h4>
					<div  class="input-group">
						<div onClick="window.location = 'sd.php';">
							<input type="radio" name="nature" value="Consultancy" id="gender-male" style="pointer-events:none;"/>
							<label for="gender-male">Consultancy</label>
						</div>
						<div onClick="window.location = 'asd.php';">
							<input type="radio" name="nature" value="Funded" id="gender-male" style="pointer-events:none;"/>
							<label for="gender-female">Funded</label>
						</div>
						<div onClick="window.location = 'publish2.php';">
							<input type="radio" name="nature" value="Funded" id="gender-male" style="pointer-events:none;"/>
							<label for="gender-female">consultancy(1)</label>
						</div>
						<div onClick="window.location = 'publish1.php';">
							<input type="radio" name="nature" value="Funded" id="gender-male" style="pointer-events:none;"/>
							<label for="gender-female">Funded(1)</label>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>

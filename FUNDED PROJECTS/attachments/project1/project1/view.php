<!DOCTYPE html>
<?php?>
<html >
<head>
  <link rel="stylesheet" href="css/style1.css">
  <meta charset="UTF-8">
  <title>Funded projects</title>
  <style type="text/css">
  .viewButton{
    width:350px;
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
  .viewButton:hover{
    background-color: #dd5555;
		box-shadow: 3px 3px black;
    width: 400px;
  }

  .viewButton span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}

	.viewButton span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -15px;
		transition: 0.5s;
	}
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
    background-color: #dd5555;
		box-shadow: 3px 3px black;
    width: 170px;
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
	<a href="index.php"> <button class="button" type="button" name="submit" style="float:left;"><span>Go Back</span></button></a>
  <div class="container" style="width:800px">
  <h2> <center> <b> View based on: </b> </center> </h2>
  <center>
    <div>
    <button class='viewButton' onclick="javascript:pdf3()">Date</button>
  </div>
  <div>
    <button class='viewButton' onclick="javascript:pdf4()">Status</button>
  </div>
  <div>
    <button class='viewButton' onclick="javascript:staff()">Title of project</button>
  </div>
  <div>
    <button class='viewButton' onclick="javascript:year5()">Faculty Name</button>
    </div>
    <div>
    <button class='viewButton' onclick="javascript:pdf2()">Company Name</button>
  </div>
  <div>
    <button class='viewButton' onclick="javascript:pdf()">List of all  funded projects till date</button>
  </div>
  <div>
    <button class='viewButton' onclick="javascript:pdf1()">List of all  consultancy projects till date</button>
  </div>
</center>
</div>
</body>
<script>
function staff()
{
  window.top.location='disp.php';
}
function year5()
{
  window.top.location='disp1.php';
}
function pdf()
{

  window.top.location='report1.php';
}
function pdf1()
{

  window.top.location='report4.php';
}
function pdf2()
{

  window.top.location='dips2.php';
}
function pdf3()
{

  window.top.location='dips3.php';
}
function pdf4()
{

  window.top.location='dips4.php';
}
</script>


</html>

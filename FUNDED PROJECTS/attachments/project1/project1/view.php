<!DOCTYPE html>
<?php?>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>Funded projects</title>
  <style type="text/css">

  </style>

</head>

<body>
  <center><h1>Funded Projects</h1></center>
	<hr>
	<a href="index.php"> <button class="button" type="button" name="submit" style="float:left;"><span>Go Back</span></button></a>
  <h2> <center> <b> View based on: </b> </center> </h2>
  <section>
    <div>
    <button class='lined thin' onclick="javascript:pdf3()">Date</button>
  </div>
  <div>
    <button class='lined thin' onclick="javascript:pdf4()">Status</button>
  </div>
  <div>
    <button class='lined thin' onclick="javascript:staff()">Title of project</button>
  </div>
  <div>
    <button class='lined thin' onclick="javascript:year5()">Faculty Name</button>
    </div>
    <div>
    <button class='lined thin' onclick="javascript:pdf2()">Company Name</button>
  </div>
  <div>
    <button class='lined thin' onclick="javascript:pdf()">List of all  funded projects till date</button>
  </div>
  <div>
    <button class='lined thin' onclick="javascript:pdf1()">List of all  consultancy projects till date</button>
  </div>
  </section>
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

<!DOCTYPE html>
<?php?>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>jQuery +3D css button</title>
  
  
  
     <style type="text/css">
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
	<div>
		<a href="index.php">BACK</a>
</div>

  <h1> <center> <b> Based on: </b> </center> </h1>


  <section>
  <button class='lined thick' onclick="javascript:pdf3()">Date</button>
  </section>

  <section>
  <button class='lined thick' onclick="javascript:pdf4()">Status</button>
  </section>
<section>
  <button class='lined thick' onclick="javascript:staff()">Title of project</button>
  </section>

<section>
  <button class='lined thick' onclick="javascript:year5()">Faculty Name</button>
  </section>

<section>
  <button class='lined thick' onclick="javascript:pdf2()">Company Name</button>
  </section>


  <section>
  <button class='lined thick' onclick="javascript:pdf()">List of all  funded projects till date</button>
  </section>

 <section>
  <button class='lined thick' onclick="javascript:pdf1()">List of all  consultancy projects till date</button>
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

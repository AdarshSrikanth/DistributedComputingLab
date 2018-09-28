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
</html>

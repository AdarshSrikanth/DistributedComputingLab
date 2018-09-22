<!DOCTYPE html>
<?php?>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>Publication Details</title>
  <style type="text/css">

  </style>
</head>

<body>
  <center><h1>Publication Management</h1></center>
	<hr>
  <section>
    <button class='lined thick' onclick="javascript:publish()" style="border-radius: 15%;">Add a Published Paper</button>
    <button class='lined thick' onclick="javascript:view()" style="border-radius: 15%;">View Published Papers</button>
  </section>
</body>
<script>
function publish()
{
  window.top.location='publish.php';
}
function view()
{
  window.top.location='searchPaper.php';
}

</script>

</html>

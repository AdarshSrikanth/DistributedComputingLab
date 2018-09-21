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

<section>
  <button class='lined thick' onclick="javascript:publish()" style="border-radius: 5%;">Add a Published Paper</button>
  </section>
<section>
  <button class='lined thick' onclick="javascript:view()" style="border-radius: 5%;">View Published Papers</button>
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

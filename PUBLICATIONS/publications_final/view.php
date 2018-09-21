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
  <button class='lined thick' onclick="javascript:year()" style="border-radius: 5%;">Search by Year</button>
</section>
<section>
  <button class='lined thick' onclick="javascript:staffwithyear()" style="border-radius: 5%;">Search by Staff With Year</button>
  </section>
  <section>
  <button class='lined thick' onclick="javascript:nature()" style="border-radius: 5%;">Search by Nature Of Paper</button>
</section>
  <section>
  <button class='lined thick' onclick="javascript:goback()" style="background-color:red;border-color:red;color: white;border-radius: 10%;">Go Back</button>
  </section>

   

</body>
<script>

function year()
{
  window.top.location='year.php';
}
function staffwithyear()
 {
  window.top.location='staffwithyear.php';
}
function nature()
 {
  window.top.location='nature.php';

  
}
function goback()
 {
  window.top.location='index.php';
}
  </script>

</html>

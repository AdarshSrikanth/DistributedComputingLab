<?php
session_start();
include "connect.php";
if(isset($_GET["ok"])){
  $sql1 = $_SESSION["sql"];
  if(mysqli_query($conn, $sql1)){
      echo "<script>alert(\"Successfully Inserted\");</script>";
  }
  else{
    echo "Error: ".mysqli_error($conn);
  }
}
header("location: form.php");
?>

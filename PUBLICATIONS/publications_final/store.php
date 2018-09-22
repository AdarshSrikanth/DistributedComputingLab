
<?php
//echo"hjtdf";
$conn= mysqli_connect("localhost","Adarsh","","Publication");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nature=$_POST["nature"];
$conf=$_POST["conf"];
$precedence=1;
$vol=$_POST["vol"];
$iss=$_POST["iss"];
$pfrom=$_POST["pfrom"];
$pto=$_POST["pto"];
$issn=$_POST["issn"];
$month=$_POST["month"];
$ugc=$_POST["ugc"];
$sij=$_POST["sij"];
/*
$sql="INSERT INTO journal_details (nature,conference,precedence, name, title, journal, volume, issue, pfrom, pto, issn, month, year, ugc, sij) VALUES ('$nature','$conf','$precedence','$name','$title','$journal','$vol','$iss','$pfrom','$pto','$issn','$month','$year','$ugc','$sij')";
//mysqli_query($db, $sql);
if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}*/
$authorArray = $_POST['author'];
$savequery = 'INSERT into paper (title,journal,year) values ("'.$_POST['title'].'","'.$_POST['journal'].'","'.$_POST['year'].'")';
if($conn->query($savequery)){
  echo 'Saved Paper';
}
echo $conn->error;
$pidquery = 'SELECT * from paper WHERE title="'.$_POST['title'].'"';
$pids = $conn->query($pidquery);
$pid=0;
foreach($pids as $p){
  $pid=$p['pid'];
}
echo $conn->error;
foreach($authorArray as $author){
  $savequery = "INSERT into staffpaper values ('$author','$pid')";
  if($conn->query($savequery)){
    echo "Saved Author";
  }
}
//echo"<script type='text/javascript'>alert('Paper Details inserted successfully')</script>";
//echo"<script type='text/javascript'>window.top.location='index.php';</script>";
$target_dir = "Papers/";
$uploadOk = 1;
$target_file = $target_dir.basename($_FILES["paper"]["name"]);
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//$info = pathinfo($_FILES['paper']['name']);
$ext = $info['extension']; // get the extension of the file
if($FileType != "pdf") {
  echo "Sorry, PDF files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
}
else {
  if (move_uploaded_file($_FILES["paper"]["tmp_name"], $target_file)) {
    echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
header( "Location: index.php");
?>

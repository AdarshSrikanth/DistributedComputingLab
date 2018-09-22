
<?php
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

$pdf = $_FILES['paper']['tmp_name'];
$file_type = $_FILES['paper']['type'];
$file_name = $_FILES['paper']['name'];
if($file_name!=""){
  $data=mysqli_real_escape_string($conn, file_get_contents($pdf));
  $q = "INSERT INTO pdfStore (pid,pdf) VALUES ('$pid','$data')";
  $result = mysqli_query($conn, $q);
  if($result){
    echo '<h3>Successfully added</h3>';
  }
  else{
    echo 'Error';
  }
}

$target_dir = "Papers/";
$uploadOk = 1;
$target_file = $target_dir.basename($_FILES["paper"]["name"]);
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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

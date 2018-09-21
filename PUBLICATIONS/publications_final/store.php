
<?php
//echo"hjtdf";
$db= mysqli_connect("localhost","Adarsh","","Publication");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$nature=$_POST["nature"];
$conf=$_POST["conf"];
$precedence=$_POST["author"];
$name=$_POST["name"];
$title=$_POST["title"];
$journal=$_POST["journal"];
$vol=$_POST["vol"];
$iss=$_POST["iss"];
$pfrom=$_POST["pfrom"];
$pto=$_POST["pto"];
$issn=$_POST["issn"];
$month=$_POST["month"];
$year=$_POST["year"];
$ugc=$_POST["ugc"];
$sij=$_POST["sij"];
$sql="INSERT INTO journal_details (nature,conference,precedence, name, title, journal, volume, issue, pfrom, pto, issn, month, year, ugc, sij) VALUES ('$nature','$conf','$precedence','$name','$title','$journal','$vol','$iss','$pfrom','$pto','$issn','$month','$year','$ugc','$sij')";
//mysqli_query($db, $sql);
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
//echo"<script type='text/javascript'>alert('Paper Details inserted successfully')</script>";
//echo"<script type='text/javascript'>window.top.location='index.php';</script>";


?>

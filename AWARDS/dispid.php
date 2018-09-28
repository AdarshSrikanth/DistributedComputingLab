<html>
<body bgcolor="antiquewhite">
<center>
<h2> SEARCH BY FACULTY ID</h2>
<br><br>
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password,'award');

?>
<form action="displayid.php" method="post">
 Enter the Faculty ID:
<select name='eid'>
<?php
    $staffquery = "SELECT * from staff";
    $staffs = $conn->query($staffquery);
    foreach ($staffs as $staff){
        echo '<option value='.$staff['eid'].'>'.$staff['name'].'</option>';
    }
?>
</select>
<br><br>
<br>
<button type="submit">SEARCH</button>
</form>
<form method="post" action="sec.html">
<button type="button" name="back"><a href="sec.html">BACK </a></button>
</form>
</center></body>
</html>
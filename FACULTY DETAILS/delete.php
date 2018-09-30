<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">PSG IT STAFF DATA MGMT</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="/Faculty/" ><i class="material-icons">home</i></a></li>
        <li><a href="form.php">INSERT</a></li>
        <li><a href="search.php">SEARCH</a></li>
        <li><a href="update.php">UPDATE</a></li>
        <li><a href="delete.php">DELETE</a></li>
      </ul>
    </div>
  </nav>
  <br><br>
<div  class="container">
<?php
  if(isset($_POST['del']))
  {
    $del = $_POST['del'];
    $sql = "DELETE FROM staff WHERE EID='$del'";
    $res = mysqli_query($conn, $sql);
  }
  $sql = "SELECT *, YEAR(CURDATE())-YEAR(doj) FROM staff";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    while($row = mysqli_fetch_array($res))
    {
      echo "<form method='POST'>";
      echo
      "
      <div class='row'>
      <div class='container'>
        <div class=''>
          <div class='card blue-grey '>
            <div class='card-content white-text'>
              <span class='card-title'>&nbsp;$row[name]</span>
              <ul type='disc'>
              <li>EID:&nbsp;$row[0]</li>
              <li>Name:&nbsp;$row[1]</li>
              <li>Mail:&nbsp;$row[2]</li>
              <li>DOJ:&nbsp;$row[3]</li>
              <li>Designation:&nbsp;$row[4]</li>
              <li>Designation Date:&nbsp;$row[5]</li>
              <li>Qualification:&nbsp;$row[6]</li>
              <li>Areas of Interest:&nbsp;$row[7]</li>
              <li>Experience:&nbsp;$row[8]</li>
              </ul>
              <input type='submit' name='del' class='btn red center' value='$row[0]'>
            </div>
          </div>
        </div>
      </div>
      </div>";
      echo "</form>";
    }
  }
    ?>
  </div>
</body>
</html>

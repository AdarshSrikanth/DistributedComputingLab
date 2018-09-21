<?php
	$dbhost='localhost';
	$dbuser="root";
	$dbpass="";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'staff_details');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Search</title>
</head>
<body class="">
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {

      // TO BE MODIFIED BY KOS


      $search = "";
      if($_POST['eid']!="")
          $search = "eid='$_POST[eid]'";
      else if($_POST['name']!="")
        $search = "name LIKE '%$_POST[name]%'";
      /*else if($_POST['exp']!=null)
          $search = "CURDATE()-doj>$_POST[exp]";
      else if($_POST['cexp']!=null)
          $search = "CURDATE()-curr_doj=$_POST[cexp]";*/

      if($search == "")
        $sql = "SELECT * FROM staff_details";
      else
        $sql = "SELECT * FROM staff_details where $search";
      $res = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($res)){
        echo "<div class='row'>
        <div class='col s12 m6'>
        <div class='card blue-grey darken-1'>
          <div class='card-content white-text'>
            <span class='card-title'>$row[name]</span>
            <ul type='disc'>
              <li>$row[0]</li>
              <li>$row[1]</li>
              <li>$row[2]</li>
              <li>$row[3]</li>
              <li>$row[4]</li>
              <li>$row[5]</li>
              <li>$row[6]</li>
              <li>$row[7]</li>
            </ul>
          </div>
        </div>
      </div>
    </div>";
      }
    }
    ?>
  <html>
   <head>
      <title>Searching Employee</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>

      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
 </head>
   <body class = "container"  >
     <!--<nav>
       <div class="nav-wrapper">
         <a href="#" class="brand-logo center">PSG IT STAFF DATA MGMT</a>
         <ul id="nav-mobile" class="left hide-on-med-and-down">
           <li><a href="/Faculty/" >HOME</a></li>
           <li><a href="form.php">INSERT</a></li>
           <li><a href="search.php">SEARCH</a></li>
           <li><a href="delete.php">DELETE</a></li>
         </ul>
       </div>
     </nav>-->
  <form class="col s12 container" name="search_form" method="post">
          <h4 class="center">Search Faculty</h4>
          <div class="row ">
            <div class="input-field col s6">
              <input id="a" type="text" data-length="10"  name="eid">
              <label for="a">Enter ID</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="b" type="text" data-length="10"  name="name">
              <label for="b">Enter Name</label>
            </div>
          </div>
          <!--<div class="row">
            <div class="input-field col s6">
              <input id="c" type="text" data-length="10"  name="exp">
              <label for="c">Enter Experience</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="c" type="text" data-length="10"  name="cexp">
              <label for="c">Enter Experience (Current Position)</label>
            </div>
          </div>-->
         <div class="row">
          <div class="input-field col s6">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
                <i class="material-icons right">send</i>
            </button>
          </div>
        </div>

      </form>
    </div>




   </body>
</html>

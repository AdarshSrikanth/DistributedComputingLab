<?php
  session_start();
  include "connect.php";
  $sql1 = '';
  if(isset($_POST['submit']))
  {
    echo '<html>
          <head>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
            <script>
              $(document).ready(function(){
                $(".modal").modal();
                $(".modal").modal("open");
              });
            </script>
          </head>';
    $eid = $_POST['emp_id'];
    $name = $_POST['emp_name'];
    $mail = $_POST['emp_mail'];
    $doj = $_POST['emp_doj'];
    $dsgn = $_POST['emp_dsgn'];
    $dsgn_dob = $_POST['emp_dsgn_doj'];
    $quali = $_POST['emp_quali'];
    $aoi = $_POST['emp_aoi'];
    $_SESSION["sql"] = "INSERT INTO staff VALUES('$eid', '$name', '$mail', '$doj', '$dsgn', '$dsgn_dob','$quali', '$aoi')";
    echo '<body>
          <form action="confirm.php" method="get">
          <div class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Inserted Data</h4>';
    echo "<table>
          <tr>
            <th>EID</th>
            <td>$eid</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>$name</td>
          </tr>
          <tr>
            <th>Mail</th>
            <td>$mail</td>
          </tr>
          <tr>
            <th>DOJ</th>
            <td>$doj</td>
          </tr>
          <tr>
            <th>Designation</th>
            <td>$dsgn</td>
          </tr>
          <tr>
            <th>Current Position DOJ</th>
            <td>$dsgn_dob</td>
          </tr>
          <tr>
            <th>Qualification</th>
            <td>$quali</td>
          </tr>
          <tr>
            <th>Area of Interest</th>
            <td>$aoi</td>
          </tr>
        </table>
        </div>
        ";
        echo '<div class="modal-footer">
                <button type="submit" name="ok" class="modal-action modal-close waves-effect waves-green btn-flat">OK</button>
                <button type="submit" name="notok" class="modal-action modal-close waves-effect waves-green btn-flat">Not OK</button>
              </div>
        </div>
        </form>
        </body>
        </html>';
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 50, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false // Close upon selecting a date,
      });
    </script>
    <title>Registration</title>
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
    <section class="container">

    <h3 class="center">Staff Registration</h3>
    <form action="" method="post" name="reg" class="container">
      <br>
      <div class="row">
        <div class="input-field">
          <input name="emp_id" id="emp_id" type="text" class="validate" pattern="[a-zA-Z]{1}[0-9]{4}" maxlength="5" required>
          <label class="active" for="emp_id">Employee ID</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="emp_name" id="emp_name" type="text" class="validate" pattern="[a-z A-Z]+" required>
          <label class="active" for="emp_name">Employee Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input type="text" name="emp_mail" id="emp_mail" class="validate" pattern="[a-z][a-zA-Z0-9_\.]*@[a-z]+\.[a-z]{2,3}" required>
          <label for="emp_mail">e-Mail ID</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="emp_doj" id="emp_doj" type="date" class="datepicker" required>
          <label class="active" for="emp_doj">Date of Joining</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="emp_dsgn" type="text" id="emp_dsgn" required>
          <label class="active" for="emp_dsgn">Current Designation</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="emp_dsgn_doj" type="date" class="datepicker" id="emp_dsgn_doj" required>
          <label class="active" for="emp_dsgn_doj">Designated Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input name="emp_quali" type="text" class="validate" pattern="[a-zA-Z ]+" id="emp_quali" required>
          <label class="active" for="emp_quali">Qualification</label>
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload one or more files regarding qualifications">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <textarea id="emp_aoi" name="emp_aoi" class="materialize-textarea" required></textarea>
          <label for="emp_aoi">Area of Interest</label>
        </div>
      </div>
      <div class="row center-align">
        <button id="dispModal" name="submit" class="btn waves-effect waves-light" type="submit">Submit</button>
        <button type="reset" class="waves-effect waves-light btn light-blue">Cancel</button>
      </div>
    </form>
  </section>
  </body>
</html>

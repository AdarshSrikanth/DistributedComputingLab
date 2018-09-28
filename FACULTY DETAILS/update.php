<?php
//error_reporting(0);
  include 'connect.php';
?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>
    <script type="text/javascript">

    function printDiv(divName) {
        //document.getElementById("card").className = "";
        var content = "<html>";
        content = content + document.getElementById("title").innerHTML + document.getElementById(divName).innerHTML ;
        content += "</body>";
        content += "</html>";
         var originalContents = document.body.innerHTML;
         var list = document.getElementById('list');
         document.body.innerHTML = content;
         document.getElementById('color').className = "black-text";

         window.print();
         //document.getElementById("card").className = "card";
         document.body.innerHTML = originalContents;
    }
    function fixedRange()
    {
      var minexp = document.getElementById("minexp").value;
      document.getElementById("maxexp").value = minexp;
      document.getElementById("maxexp").focus();
    }
    </script>

    <script>
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>
  </head>

  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">PSG IT STAFF DATA MGMT</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="/Faculty/"><i class="material-icons">home</i></a></li>
          <li><a href="form.php">INSERT</a></li>
          <li><a href="search.php">SEARCH</a></li>
          <li><a href="update.php">UPDATE</a></li>
          <li><a href="delete.php">DELETE</a></li>
        </ul>
        <li><button style="background-color: inherit;box-shadow:0 0 0 0;" class="btn right" onclick="printDiv('print')"> <i class="material-icons">print</i>dcsdsc </button></li>
      </div>
    </nav>
    <br><br>
    <h4 class="center" id="title">Update Faculty</h4>
    <br><br>
      <form class="center container" name="update_form" method="post">
        <div class="row ">
          <div class="input-field col s8 col offset-l2 ">
            <select id="id" name="eid" onchange="form.submit()">
              <label for="id">ID</label>
              <option value="" disabled selected>Enter ID</option>
              <?php
                $sql = "SELECT EID,name FROM staff ORDER BY EID";
                $res = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($res))
                {
                  $val = $row['EID'];
                  $name = $row['name'];
                  echo "<option name='eid' value='$val'> $val - $name </option>";
              }
             ?>
            </select>
          </div>
        </div>
      </form>

      <?php
          if(isset($_POST['eid'])) {
            $eid = $_POST['eid'];
            $sql = "SELECT * FROM staff where EID = '$eid'";
            $res = mysqli_query($conn, $sql);
            //echo $sql;
            $row = mysqli_fetch_array($res);
            ?>

              <form action="" method="post" name="reg" class="container">
                <br>
                <h5 class="center"> Employee ID : <?php echo strtoupper($row[0])  ?> </h5>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_id" id="emp_id" type="text" class="validate" pp="[a-zA-Z]{1}[0-9]{4}" maxlength="5" hidden value="<?php echo $row[0]?>">
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_name" id="emp_name" type="text" class="validate" pp="[a-z A-Z]+" required value="<?php echo $row[1]?>">
                    <label class="active" for="emp_name">Employee Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input type="text" name="emp_mail" id="emp_mail" class="validate" pp="[a-z][a-zA-Z0-9_\.]*@[a-z]+\.[a-z]{2,3}" required value="<?php echo $row[2]?>">
                    <label for="emp_mail">e-Mail ID</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_doj" id="emp_doj" type="date" class="datepicker" required value="<?php echo date('Y-m-d', strtotime($row[3]));?>">
                    <label class="active" for="emp_doj">Date of Joining</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_dsgn" type="text" id="emp_dsgn" required value="<?php echo $row[4]?>">
                    <label class="active" for="emp_dsgn">Current Designation</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_dsgn_doj" type="date" class="datepicker" id="emp_dsgn_doj" required value="<?php echo date('Y-m-d', strtotime($row[5]));?>">
                    <label class="active" for="emp_dsgn_doj">Designated Date</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input name="emp_quali" type="text" class="validate" pp="[a-zA-Z ]+" id="emp_quali" required value="<?php echo $row[6]?>">
                    <label class="active" for="emp_quali">Qualification</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <textarea id="emp_aoi" name="emp_aoi" class="materialize-textarea" required><?php echo $row[7];?></textarea>
                    <label for="emp_aoi">Area of Interest</label>
                  </div>
                </div>
                <div class="row center-align">
                  <button id="dispModal" name="submit" class="btn waves-effect waves-light" type="submit" onclick="form.submit()">Submit</button>
                </div>
              </form>
            <?php
          }
          if(isset($_POST['submit']))
          {
            $eid = $_POST['emp_id'];
            $name = $_POST['emp_name'];
            $mail = $_POST['emp_mail'];
            $doj = $_POST['emp_doj'];
            $dsgn = $_POST['emp_dsgn'];
            $dsgn_dob = $_POST['emp_dsgn_doj'];
            $quali = $_POST['emp_quali'];
            $aoi = $_POST['emp_aoi'];
            $sql = "UPDATE staff SET Name='$name',Mail = '$mail',Doj='$doj',design='$dsgn',curr_doj='$dsgn_dob',qualification='$quali',area_of_interest='$aoi' WHERE Eid='$eid'";
            $res = mysqli_query($conn, $sql);
            if($res)
              echo "<script> alert('Data Updated Sucessfully'); </script>";
            else
            echo "<script> alert('Bummer!! Error!!'); </script>";
          }
          ?>

  </body>

  </html>

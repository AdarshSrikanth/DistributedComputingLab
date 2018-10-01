<?php
//error_reporting(0);
  include 'connect.php';
?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Search</title>
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
        var content =  document.getElementById("title").innerHTML + "<br> "+ document.getElementById(divName).innerHTML ;

         var originalContents = document.body.innerHTML;
         document.body.innerHTML = content;
         document.getElementById('color').className = "black-text";
         var x = document.getElementsByTagName("div");
          var i;
          for (i = 0; i < x.length; i++) {
              x[i].className = "";
          }
         window.print();
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
    <h4 class="center" id="title">Search Faculty</h4>
    <br><br>
    <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
         // TO BE MODIFIED BY KOS
         $search = "";
         if(!empty($_POST['eid']))
             $search = "Eid='$_POST[eid]'";
         else if(!empty($_POST['name']))
           $search = "Name LIKE '%$_POST[name]%'";
         else if(!empty($_POST['cexp']))
           $search = "CURDATE()-curr_doj=$_POST[cexp]";
         else if(!empty($_POST['minexp']) || !empty($_POST['maxexp']))
           {
             $min = 0;
             $max = 0;
             if($_POST['minexp']!=null)
                $min = $_POST['minexp'];
             if($_POST['maxexp']!=null)
                $max = $_POST['maxexp'];
             $search = "YEAR(CURDATE())-year(doj) BETWEEN $min AND $max";
           }
         if($search == "")
           $sql = "SELECT *, YEAR(CURDATE())-YEAR(doj) FROM staff";
         else
           $sql = "SELECT *, YEAR(CURDATE())-YEAR(doj) FROM staff where $search";
         $res = mysqli_query($conn, $sql);
         $flag = 1;
         echo "<div class='white-text' id='print'>";
         while($row = mysqli_fetch_array($res)){
           echo "

           <div class='row' id='color'>

           <div class='container'>
             <div class='col l6 m12 s12'>
               <div class='card blue-grey ' id='card'>
                 <div class='card-content'>
                   <span class='card-title'>&nbsp;$row[name]</span>
                   <ul type='disc' >
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
                 </div>
               </div>
             </div>
           </div>
           ";
          if($flag++ %2 == 0)
            echo "</div>";
         }
         echo "</div>";
       }
       else
       {
       
       ?>
      <form class="center container" name="search_form" method="post">
        <div class="row ">
          <div class="input-field col s8 col offset-l2 ">
            <select id="id" name="eid">
              <label for="id">ID</label>
              <option value="" disabled selected>Select ID</option>
              <?php
                $sql = 'SELECT * FROM staff';
                $res = $conn->query($sql);            
                while($row = mysqli_fetch_array($res))
                {
                  $val = $row[0];
                  $name = $row[1];
                  echo "<option value='$val'> $val - $name </option>";
                }
             ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8 col offset-l2 ">
            <input id="name" type="text" data-length="10" name="name">
            <label for="name">Enter Name Query</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4 col offset-l2 ">
            <input id="minexp" type="text" data-length="10" name="minexp" onblur="fixedRange()">
            <label for="minexp">Enter Minimum Experience</label>
          </div>
          <div class="input-field col s4 ">
            <input id="maxexp" type="text" data-length="10" name="maxexp">
            <label for="maxexp">Enter Maximum Experience</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8 col offset-l2 ">
            <input id="c" type="text" data-length="10" name="cexp">
            <label for="c">Enter Experience (Current Position)</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8 col offset-l2 ">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
                <i class="material-icons right">send</i>
            </button>
          </div>
        </div>

      </form>
      <?php } ?>
      </div>
  </body>

  </html>

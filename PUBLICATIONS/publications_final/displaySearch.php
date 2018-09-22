<html>
<head>
  <link rel="stylesheet" href="css/style1.css">
  <style>
  .button {
    width:150px;
    border-radius: 4px;
    background-color:#d55555;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 17px;
    padding: 10px;

    transition: all 0.5s;
    cursor: pointer;
    margin-left:0px;
  }
  .button:hover
  {
    box-shadow: 3px 3px grey;
  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -15px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }

  table.blueTable {
    border: 2px solid #1C6EA4;
    background-color: #EEEEEE;
    width: 100%;
    text-align: left;
    border-collapse: collapse;
  }
  table.blueTable td, table.blueTable th {
    border: 1px solid #AAAAAA;
    padding: 3px 2px;
  }
  table.blueTable tbody td {
    font-size: 14px;
  }
  table.blueTable tr:nth-child(even) {
    background: #D0E4F5;
  }
  table.blueTable thead {
    background: #1C6EA4;
    background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    border-bottom: 2px solid #444444;
  }
  table.blueTable thead th {
    font-size: 15px;
    font-weight: bold;
    color: #FFFFFF;
    border-left: 2px solid #D0E4F5;
  }
  table.blueTable thead th:first-child {
    border-left: none;
  }

  table.blueTable tfoot {
    font-size: 14px;
    font-weight: bold;
    color: #FFFFFF;
    background: #D0E4F5;
    background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    border-top: 2px solid #444444;
  }
  table.blueTable tfoot td {
    font-size: 14px;
  }
  table.blueTable tfoot .links {
    text-align: right;
  }
  table.blueTable tfoot .links a{
    display: inline-block;
    background: #1C6EA4;
    color: #FFFFFF;
    padding: 2px 8px;
    border-radius: 5px;
  }

  </style>
</head>
<body>
  <a href="searchPaper.php"> <button type="button" name="submit" class="button" style="float:left;width:130px;height:40px"><span>Go Back</span></button></a>
  <center>
    <div class="containerView">
      <h3>Search Results</h3>
      <?php
      // Create connection
      $conn = new mysqli("localhost", "Adarsh","","Publication");
      $result=NULL;
      $yearflag= FALSE;
      $authorflag = FALSE;
      if($_POST['year']!=NULL){
        $yearflag = TRUE;
      }
      if($_POST['author']!='none'){
        $authorflag = TRUE;
      }
      if($yearflag&&$authorflag){
        $query = 'Select * from paper where year='.$_POST['year'].' and pid IN (SELECT pid from staffpaper where eid="'.$_POST['author'].'")';
        $result = $conn->query($query);
      }
      else if($yearflag){
        $query='SELECT * from paper where year='.$_POST['year'];
        $result = $conn->query($query);
      }
      else if($authorflag){
        $query='SELECT * from paper where pid IN (SELECT pid from staffpaper where eid="'.$_POST['author'].'")';
        $result = $conn->query($query);
      }
      else{
        $msg = "Select Author or Year or Both";
        function phpAlert($msg) {
          echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        }
        phpAlert($msg);
        header("Location:searchPaper.php");
      }
      echo $conn->error;
      if($result==0){
        echo '<br><h2>No result</h2>';
      }
      else{
        echo '<table class="blueTable">
        <tr>
        <th>Paper Id</th>
        <th>Title</th>
        <th>Journal</th>
        <th>Year</th>
        <th>Author(s)</th>
        </tr>';
        foreach($result as $row){
          echo '<tr>';
          echo '<td>'.$row['pid'].'</td>';
          echo '<td>'.$row['title'].'</td>';
          echo '<td>'.$row['journal'].'</td>';
          echo '<td>'.$row['year'].'</td>';
          echo '<td>';
          $sql = "SELECT * from staffpaper where pid=".$row['pid'];
          $authors = $conn->query($sql);
          echo $conn->error;
          $echostr="";
          foreach($authors as $a){
            $sql = 'SELECT * from staff where eid="'.$a['eid'].'"';
            $result = $conn->query($sql);
            echo $conn->error;
            $authname = $result->fetch_array();
            $echostr=$echostr.$authname[1].", ";
          }
          $echostr=substr($echostr,0,-2);
          echo $echostr;
          echo '</td>';
          echo '</tr>';
        }
      }
      ?>
    </table>
  </center>
</div>
</body>
</html>

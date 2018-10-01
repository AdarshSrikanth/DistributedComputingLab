
<?php
if(isset($_POST["submit"])){
        $sem = $_POST["sem"];
        $year = $_POST["year"];
        $name = $_POST["name"];

        //Create connection and select DB
        $db = new mysqli("localhost", "Adarsh", "", "Timetable");

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        echo 'uploading file';
        $dataTime = date("Y-m-d H:i:s");
        //Insert image content into database
        $pdf = $_FILES['pdf']['tmp_name'];
        $file_type = $_FILES['pdf']['type'];
        $file_name = $_FILES['pdf']['name'];
        if($file_name!=""){
          $data=mysqli_real_escape_string($db, file_get_contents($pdf));
          $q = "INSERT INTO timetable_staff (pdf, created,sem,year,name) VALUES ('$data', '$dataTime', '$sem', '$year', '$name')";
          $result = mysqli_query($db, $q);
          if($result){
            echo '<h3>Successfully added</h3>';
            header("Location: index.html");
          }
          else{
            echo 'Error';
          }
        }
}
?>

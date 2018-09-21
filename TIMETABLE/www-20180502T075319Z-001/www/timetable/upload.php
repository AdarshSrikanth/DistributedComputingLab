
<?php
if(isset($_POST["submit"])){
   // $check = getimagesize($_FILES["image"]["tmp_name"]);
   // if($check !== false){

        $pdf = $_FILES['pdf']['tmp_name'];
        $imgContent = addslashes(file_get_contents($pdf));
        $sem = $_POST["sem"];
        $year = $_POST["year"];
        $name = $_POST["name"];

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'staff_details';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into timetable_staff (pdf, created,sem,year,name) VALUES ('$imgContent', '$dataTime', '$sem', '$year', '$name')");
        if($insert){
            echo "<script type='text/javascript'> alert('Successfully uploaded'); </script>";
            header("Location:index.html");

        }else{
            echo "<script type='text/javascript'> alert('Failed to update'); </script>";
            header("Location:form.html");
        }
        


  //  else{
  //      echo "Please select an image file to upload.";
  //  }
}
?>
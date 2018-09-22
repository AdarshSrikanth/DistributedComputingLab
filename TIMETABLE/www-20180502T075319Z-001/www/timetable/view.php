<?php
if(!empty($_POST['name'])){
    //DB details
    //Create connection and select DB
    $db = new mysqli("localhost", "Adarsh", "", "Timetable");

    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    $name = $_POST['name'];
    $sem = $_POST["sem"];
    $year = $_POST["year"];
    //$job = $_GET["job"];

    //Get image data from database
    $result = $db->query("SELECT pdf FROM timetable_staff WHERE name = '$name' and year = '$year' and sem = '$sem'");

    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: application/pdf");
       //readfile($imgData['pdf']);
        echo $imgData['pdf'];
    }else{
        echo "<script type='text/javascript'> window.alert('Timetable not found'); </script>";
        echo "<script type='text/javascript'> window.location.href='down.php'; </script>";
    }
}
?>

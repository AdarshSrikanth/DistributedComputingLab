<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Timetable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="css/style1.css">
</head>
<body>
    <center><h1>Timetable Upload</h1></center>
    <hr>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data" onSubmit="return confirm('Are you sure you wish to update?');">
        <h3>Name:</h3>
        <select name="name" size="1" style="width:100%;">
            <option value="none" selected>Select Author</option>
        <?php
            $conn = new mysqli("localhost", "Adarsh", "",'Publication');
            $staffquery = "SELECT * from staff";
            $staffs = $conn->query($staffquery);

            foreach ($staffs as $staff){
                echo '<option value='.$staff['name'].'>'.$staff['name'].'</option>';
            }
        ?>
        </select>
        <h3>Year:</h3>
        <select name = "year" required >
               <option value="none" selected>Select Year</option>
               <option value = "2017">2017</option>
               <option value = "2018">2018</option>
               <option value = "2019">2019</option>
               <option value = "2020">2020</option>
             </select><br>
        <h3>Sem:</h3>
        <div class="input-group">
          <input type="radio" name="sem" value="0" id="sem_even"/>
          <label for="sem_even">Even</label>
          <input type="radio" name="sem" value="1" id="sem_odd"/>
          <label for="sem_odd">Odd</label>
        </div>
        <h3>Select timetable file to upload:<h3>
        <input type="file" name="pdf" accept=".pdf" required/> <br><br>
        <input type="submit" name="submit" value="Update Timetable" />
        </form>
        <br>
        <br>

        <center><button onclick="goBack()" type="button">Go Back</button></center>
    </div>
    <script>
    function goBack() {
        window.top.location("index.html");
    }
    </script>
</body>
</html>

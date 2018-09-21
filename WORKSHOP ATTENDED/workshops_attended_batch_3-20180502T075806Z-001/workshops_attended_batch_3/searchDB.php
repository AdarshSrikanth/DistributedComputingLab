<?php
//include the database configuration file

 $host = "localhost";
 
 $user = "root";
 
 $password = "";
 
 $db = "staff_details";
 
 $conn = mysqli_connect($host, $user, $password, $db);
 if(mysqli_connect_errno()){
  echo "Connection error : ". mysqli_connect_error();
 }
//Check whether userInput exists or not

  if(isset($_GET['userInput'])){
   $value = $_GET['userInput']; //assign the value
  }else{
   echo "no input";
  }
//Select query

  $sql = "SELECT eid FROM programs_attended WHERE eid LIKE '%".$value."%';";
  if($result = mysqli_query($conn, $sql)){
   if(mysqli_num_rows($result) > 0){ 
//Store the result in an array list[]

     while($row = mysqli_fetch_array($result)){
     $list[] = $row['eid'];
    }
   }else{
//set a null value to list[] if no result to prevent error

    $list[] = "";
   }
  }
 
  if(!empty($value)){
   if($matched = preg_grep('~'.$value.'~', $list)){
   $count = 0;
   echo '<ul>';
    while($count < sizeOf($list)){
     if(isset($matched[$count])){
/*
link the real target search file which should be opened when we click the search button or select the one from the drop down suggestion.
*/
      echo '<a href=displayid.php?eid='.$matched[$count].'><li>'.$matched[$count].'</li></a>';
     }
     $count++;
    }
   echo '</ul>';
   }else{
    echo "No result";
    echo "No result";
   }
  }
?>

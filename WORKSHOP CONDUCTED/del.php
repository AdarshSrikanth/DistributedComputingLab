<html>

   <head>
      <title>Delete a Record from MySQL Database</title>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width:120px;
    margin: 14px 120px 6px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
body{
			background-image:url(download.jpeg);
			background-repeat:no-repeat;
			background-size:cover;
      margin-top: 100px;
		}
    a{
      text-decoration: none;
    }
.p
{
	font-size:200px;
}
.button1 {
    background-color: white;
    color: black;
    border: 4px solid black;
}

.button1:hover {
    background-color: black;
    color:white;
}


input[type=text] {
    width: 15%;
    padding: 8px 8px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 5px;
}

</style>
</head>
   <body>
     <center>
       <h1> Delete Details </h1><br />
      <?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
			$dbname="staff_details";
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			if(!$conn){
				echo "Conn error";
			}

            $emp_id = $_POST['emp_id'];

            $sql = "DELETE FROM programs_conducted WHERE eid = $emp_id" ;
			echo mysqli_query($conn, $sql);
         }
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
								<b>Employee-id:</b> <input name = "emp_id" type = "text" id = "emp_id"> <br />
                <input name = "delete" type = "submit" class="button button1" id = "delete" value = "Delete">
               </form>
               <table>
                 <tr>
                   <td>
                     <a href="index.html"><button style="border-radius: 50px; width: 70px; height: 70px"><img src="images/home.png" style="width: 100%"/></button></a>
                   </td>
                 </tr>
               </table>
             </center>
   </body>
</html>

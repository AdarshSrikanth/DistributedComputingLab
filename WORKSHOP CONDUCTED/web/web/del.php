<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 2px 2px;
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
    border: 3px solid black;
    border-radius: 5px;
}

</style>
</head>

  
   
   <body>
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
            
            $sql = "DELETE FROM programs_attended WHERE eid = $emp_id" ;
			echo mysqli_query($conn, $sql);
         }
            ?>

		<pre>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  









                                                                   
								Employee-id:<input name = "emp_id" type = "text" 
                                                                 id = "emp_id">
								
								                <input name = "delete" type = "submit" 
                                          id = "delete" value = "Delete"> </pre>
         
         <!--    			                                 <button class= "button button1" type="submit" name="delete"
                        				      id = "delete" value = "Delete">  -->
                     
                  </table>
               </form>
           
      
   </body>
</html>
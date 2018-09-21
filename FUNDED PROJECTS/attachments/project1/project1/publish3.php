
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style1.css">
	<title></title>
	<style type="text/css">
		
.button {
  width:150px;
  border-radius: 4px;
  background-color:red;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 17px;
  padding: 10px;
 
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button:hover
{
 box-shadow: 3px 3px tomato;
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

	</style>
</head>
<body>

<div class="container">
  <form method="post" action="store.php">
    <div class="row">
    <center> <b>  <h4>Funded Projects</h4> </b> </center>
        <div class="col-half">
     
     
     <h4>Name of Agency</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Name of the Agency" name="name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
        <h4>Faculty Name</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Faculty Name" name="fname"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      
      <h4>Title Of the Project</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Title of the project" name="title" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

     <h4>Total Amount</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Total Amount" name="amt" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
    
 	

  
       <h4>Period of support</h4>
      <div class="input-group input-group-icon">
        <input type="date" placeholder="From" min="1" name="pfrom"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
       <div class="input-group input-group-icon">
        <input type="date" placeholder="To" min="1" name="pto" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        
      </div>
     
     	 <h4>Status</h4>
        <div class="input-group">
 <input type="radio" name="ugc" value="1" id="applied"/>
          <label for="applied">Applied</label>
 <input type="radio" name="ugc" value="1" id="Under Review"/>
          <label for="completed">Ongoing</label>
          <input type="radio" name="ugc" value="1" id="completed"/>
          <label for="completed">Completed</label>
          <input type="radio" name="ugc" value="0" id="ongoing"/>
          <label for="ongoing">On-going</label>
        </div>
<center><input type="file" name="file" value="Upload form" /></center>
    <center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>

  </form>
</div>

<?php
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['title']) && !empty($_POST['amt']) && !empty($_POST['pfrom']) && !empty($_POST['pto'] && !empty($_POST['ugc'])) {
	$ff=$_POST['name'];
	$ll=$_POST['fname'];
	$ee=$_POST['title'];
	$pp=$_POST['amt'];
	$bb=$_POST['pfrom'];
	$rr=$_POST['pto'];
	$sr=$_POST['ugc'];

	$con=mysql_connect('localhost','root','root') or die(mysql_error());
	mysql_select_db('fproject') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM funded WHERE fname='".$ff."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO funded(name,facultyname,title,amount,sfrom,sto,status) VALUES('$ff','$ll','$pp','$ee','$bb','$rr','$sr')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>













</body>
</html>
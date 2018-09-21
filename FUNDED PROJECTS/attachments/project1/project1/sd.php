<?php

?>
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
.add{
  position:absolute;
  top:0;
  left-300;
  right:0;
  font-size:250%;

}

  </style>
</head>
<body>
  <div>
 <a href="publish.php">BACK</a>
</div>
<div class="container">

  <form method="post" action="store1.php">

    <div class="row">
  <center> <b>    <h4>Consultancy Projects</h4> </b> </center>
        <div class="col-half">

     <h4>Faculty Name</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Faculty Name" name="name" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
        <html>
<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <style>
        body {
            font: 13px verdana;
            font-weight: normal;
        }
    </style>
<html>
<head>
    <title>Create Elements Dynamically using jQuery</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <style>
        body {
            font: 13px verdana;
            font-weight: normal;
        }
    </style>

      </div>
 <h4>Title Of the Project</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Title of the project" name="title" required />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
     
     <h4>Name of Company</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Name of the Company" name="name1" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
        
      
     

     <h4>Total Amount</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Total Amount" name="title1" required  pattern="[0-9]{1,}" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
    
  

  
       <h4>Period of support</h4>
      <div class="input-group input-group-icon">
        <input type="date" placeholder="From" min="1" name="pfrom" required/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
       <div class="input-group input-group-icon">
        <input type="date" placeholder="To" min="1" name="pto" required />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
        
      </div>
     
       <h4>Status</h4>
        <div class="input-group">

          <input type="radio" name="ugc" value="completed" id="completed"/>
          <label for="completed">Completed</label>
          <input type="radio" name="ugc" value="ongoing" id="ongoing"/>
          <label for="ongoing">On-going</label>
        </div>
 <center><input type="file" name="file" value="Upload form" /></center>
    <center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>

  </form>
</div>
</body>
</html>
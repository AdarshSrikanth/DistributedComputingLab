<?php

?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style4.css">
	<title></title>
	<style type="text/css">
		
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
  margin-left:50px;
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
  <form method="post" action="display1.php">
    <div class="row">
     
        <h4>Year of Paper Published</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="Enter the Year" name="year"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      
    <center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>

  </form>
</div>
</body>
</html>
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
<a href="view.php">BACK</a>
</div>
<div class="container">
  <form method="get" action="report8.php">
    <div class="row">
   
        <div class="col-half">
     
     
     <h4>Date</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="yyyy-mm-dd" name="varname" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
        <center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>
    
      </div>
    </div>
  </div>
 
</form>
</div>

</body>
</html>
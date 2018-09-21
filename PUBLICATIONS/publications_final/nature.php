<?php

?>
<!DOCTYPE html>
<html>
<head>
   <script src="jquery/jquery.min.js"></script>
	 <link rel="stylesheet" href="css/style4.css">
	<title>Publication Details</title>
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
  margin-left:0px;
}
.button:hover
{
 box-shadow: 3px 3px grey;
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
  
    <div class="row">
     <form method ="post" action="display3.php">
         <h4>Nature of Publication</h4>
        <div class="input-group">
          <input type="radio" name="nature" value="National" id="gender-male" required/>
          <label for="gender-male">National</label>
          <input type="radio" name="nature" value="International" id="gender-female" required/>
          <label for="gender-female">International</label>
        </div>
      
     <button type="submit" name="submit" class="button" style="float:right;margin-right:0px;background-color:green"><span>Submit</span></button>
 <a href="view.php"> <button type="button" name="submit" class="button" style="float:left;"><span>Go Back</span></button></a>

  </form>
</div>
</body>
</html>
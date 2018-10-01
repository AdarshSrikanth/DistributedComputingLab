<?php

?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style1.css">
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
  margin-right: 0px;
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
input
{
  width:100%;
}
input[type="radio"]:hover
{
   box-shadow: 2px 2px grey;
}
	</style>
</head>
<body>
	<center><h1>Publication Management</h1></center>
	<hr>
<a href="index.php"> <button type="button" name="submit" class="button" style="float:left;"><span>Go Back</span></button></a>
<div class="container">
  <form method="post" action="store.php" name="mainForm" id="mainForm" enctype="multipart/form-data" onSubmit="return confirm('Are you sure you wish to update?');">
    <div class="row">
      <h3>Journal Details</h3>
        <div class>
        <h4>Nature of Publication</h4>
        <div class="input-group">
          <input type="radio" name="nature" value="National" id="gender-male"/>
          <label for="gender-male">National</label>
          <input type="radio" name="nature" value="International" id="gender-female"/>
          <label for="gender-female">International</label>
        </div>
       <h4>Nature of Conference</h4>
        <div class="input-group">
          <input type="radio" name="conf" value="National" id="yes2"/>
          <label for="yes2">National</label>
          <input type="radio" name="conf" value="International" id="no2"/>
          <label for="no2">International</label>
        </div>
				<!--
				<h4>Author Precedence Type</h4>
        <div class="input-group">
          <input type="radio" name="author" value="1" id="1"/>
          <label for="1">1st</label>
          <input type="radio" name="author" value="2" id="2"/>
          <label for="2">2nd</label>
          <input type="radio" name="author" value="3" id="3"/>
          <label for="3">3rd</label>
          <input type="radio" name="author" value="4" id="4"/>
          <label for="4">Other</label>
        </div>
				-->
        <h4>Author details</h4>
      <div class="input-group input-group-icon">
        <!--<input type="text" placeholder="Name of the Author" name="name" id="author1" required pattern="[a-zA-Z\s]+"/>-->
				<select name="author[]" multiple size="5">
        <?php
						$conn = new mysqli("localhost","Adarsh","",'Publication');
            $staffquery = "SELECT * from staff";
            $staffs = $conn->query($staffquery);
            foreach ($staffs as $staff){
                echo '<option value='.$staff['eid'].'>'.$staff['name'].'</option>';
            }
        ?>
			</select>
				<!--
				<button type="button" onclick="textBoxCreate()">+</button>
				<button type="button" onclick="textBoxDelete()">-</button>
        <div class="input-icon"><i class="fa fa-user"></i></div>
				-->
      </div>
      <h4>Title Of the Paper</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Title of the paper" name="title" required pattern="[a-zA-Z\s]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

 	<h4>Name of the Journal</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Name of the Journal" name="journal" required pattern="[a-zA-Z\s]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

   		<h4>Volume Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="Volume No." min="1" name="vol" required  pattern="[0-9]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
       <h4>Issue Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="Issue No." min="1" name="iss" required pattern="[0-9]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
       <h4>Page Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="From" min="1" name="pfrom" pattern="[0-9]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
       <div class="input-group input-group-icon">
        <input type="number" placeholder="To" min="1" name="pto" pattern="[0-9]+"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
      <h4>ISSN or ISDN Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="ISSN or ISDN No." min="1" name="issn" pattern="[0-9]{6,}"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="row">
        <h4>Year of Publication</h4>
        <div class="input-group">
                    <div class="col-third">
            <input type="text" placeholder="MM" name="month" required pattern="[1[0-2]|0[1-9]]"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="year" required pattern="[0-9]{4}"/>
          </div>
        </div>
     	 <h4>UGC Listed Journal</h4>
        <div class="input-group">
          <input type="radio" name="ugc" value="1" id="yes"/>
          <label for="yes">Yes</label>
          <input type="radio" name="ugc" value="0" id="no"/>
          <label for="no">No</label>
        </div>
         <h4>Scoupus Indexed Journal</h4>
        <div class="input-group">
          <input type="radio" name="sij" value="1" id="yes1"/>
          <label for="yes1">Yes</label>
          <input type="radio" name="sij" value="0" id="no1"/>
          <label for="no1">No</label>
        </div>
          <h4>Upload Paper</h4>
          <input type="file" id="File" name="paper" />
      <br/>
		</div>
        <br/><br/><br>
    <input type="submit" name="submit" class="button" style="float:right;background-color:green"/>
    <input type="reset" name="reset" class="button" style="float:left;"/>
	</div>
	</form>
</div>
</div>

			<script>
			var i = 1; // Global Variable for Name
			function textBoxCreate(){
				if(i>3){
					alert("Maximum authors reached");
					return;
				}
				else{
					i++;
					var y = document.createElement("INPUT");
					y.setAttribute("type", "text");
					y.setAttribute("Placeholder", "Name of Author" + i);
					y.setAttribute("Name", "name"+i);
					y.setAttribute("id", "author"+i);
					y.setAttribute("pattern","[a-zA-Z]+");
					document.getElementById("myForm").appendChild(y);
				}
			}
			function textBoxDelete(){
				if(i==1){
					alert("Atleast one author required");
					return;
				}
				if(i>0){
					var y = document.getElementById("author"+i);
					document.getElementById("myForm").removeChild(y);
					i--;
				}

			}

			function back(){
				window.top.location("index.php");
			}
			</script>
</body>
</html>

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

<div class="container">
  <form method="post" action="store.php">
    <div class="row">
      <h4>Journal Details</h4>
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
        <h4>Author details</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Name of the Author" name="name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>

      <h4>Title Of the Paper</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Title of the paper" name="title" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

 	<h4>Name of the Journal</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Name of the Journal" name="journal" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

   <h4>Volume Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="Volume No." min="1" name="vol" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
       <h4>Issue Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="Issue No." min="1" name="iss" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
       <h4>Page Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="From" min="1" name="pfrom"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
       <div class="input-group input-group-icon">
        <input type="number" placeholder="To" min="1" name="pto" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>

      </div>
      <h4>ISSN or ISDN Number</h4>
      <div class="input-group input-group-icon">
        <input type="number" placeholder="ISSN or ISDN No." min="1" name="issn"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="row">
        <h4>Year of Publication</h4>
        <div class="input-group">
                    <div class="col-third">
            <input type="text" placeholder="MM" name="month" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="year"/>
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
          <input type="file" id="File" name="pubpaper" />
      <br/>
		</div>
        <br/><br/><br>
    <input type="submit" name="submit" class="button" style="float:right;background-color:green"/>
    <input type="reset" name="reset" class="button" style="float:left;"/>
	</div>
	</form>
</div>
</div>
<script type="text/javascript">
  $("#clear").click(function() {
  var x = $("#File");
     x.val("");
});
</script>
</body>
</html>

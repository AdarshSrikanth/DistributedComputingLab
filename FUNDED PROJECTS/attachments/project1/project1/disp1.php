
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style1.css">
	<title>Funded Project</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<style type="text/css">

.button {
  width:150px;
  border-radius: 4px;
  background-color:#ee5555;
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
 box-shadow: 3px 3px black;
 width: 160px;
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

<script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"fetch.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#search_text').html(data);
      }
    });
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();
    }
  });
});
</script>

<body>
	<center><h1>Funded Projects</h1></center>
	<hr>
	<a href="view.php"> <button class="button" type="button" name="submit" style="float:left;"><span>Go Back</span></button></a>
<div class="container">
  <form method="post" action="report6.php">
         <h4>Faculty Name</h4>
				 <input type="text" list="search_text" name="varname" required placeholder="Faculty Name"><br>
 				<datalist name="search_text" id="search_text"/></datalist>
        <center>  <button type="submit" name="submit" class="button"><span>Submit</span></button></center>
</form>
</div>
</body>
</html>

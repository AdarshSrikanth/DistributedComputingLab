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
<script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"fetch1.php",
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

<div class="container">
  <form method="post" action="display1.php">
    <div class="row">

        <h4>Year of Paper Published</h4>
      <div class="input-group input-group-icon">
        <input type="text" list="search_text" placeholder="From(Double Click for Suggestions)" name="from" required/><br/><br/>
           <datalist name="search_text" id="search_text"/></datalist>
         <input type="number" list="search_text" placeholder="To" value="null" name="to"/>
          <datalist name="search_text" id="search_text"/></datalist>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>

     <button type="submit" name="submit" class="button" style="float:right;margin-right:0px;background-color:green"><span>Submit</span></button>
 <a href="view.php"> <button type="button" name="submit" class="button" style="float:left;"><span>Go Back</span></button></a>

  </form>
</div>
</body>
</html>

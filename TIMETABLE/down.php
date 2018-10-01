<html>
<head>
	<title>View Timetable</title>
  <script src="jquery/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="all" href="css/style1.css">
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
	<center><h1>View Timetable</h1></center>
    <hr>
    <div class="container">
		<form action="view.php" method="post">
    	<h3>Name:</h3>
			<input type="text" list="search_text" name="name" required placeholder="Name"><br>
      <datalist name="search_text" id="search_text"/></datalist>
    	<h3>Year:<h3>
			<select name = "year" required>
               <option value = "2017">2017</option>
               <option value = "2018">2018</option>
               <option value = "2019">2019</option>
               <option value = "2020">2020</option>
             </select><br>
    	<h3>Sem:</h3>
			<div class="input-group">
				<input type="radio" name="sem" value="0" id="sem_even"/>
				<label for="sem_even">Even</label>
				<input type="radio" name="sem" value="1" id="sem_odd"/>
				<label for="sem_odd">Odd</label>
			</div>
    	<input type="submit" name="submit" value="View" class="buttons">
		</form>
		<center><button onclick="goBack()">Go Back</button></center>
	</div>
	<script>
	function goBack() {
   		window.top.location("index.html");
	}
	</script>
</body>
</html>

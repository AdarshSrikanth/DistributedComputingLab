<html>
<head>
	<title>View Timetable</title>
  <script src="jquery/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="all" href="css/down.css">
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
    <div class="fdet">
		<form action="view.php" method="get">
			<pre>

    	Name: <input type="text" list="search_text" name="name" required><br>
      <datalist name="search_text" id="search_text"/></datalist>
    	Year: <select name = "year" required>
               <option value = "2017">2017</option>
               <option value = "2018">2018</option>
               <option value = "2019">2019</option>
               <option value = "2020">2020</option>
             </select><br>
    	Sem: <input type="radio" name="sem" value="0" checked>Even   <input type="radio" name="sem" value="1">Odd<br>
    	<input type="submit" name="submit" value="View" class="buttons">
			</pre>
		</form>
	</div>
	<button onclick="goBack()">Go Back</button>
	<script>
	function goBack() {
   		window.history.back();
	}
	</script>
</body>
</html>
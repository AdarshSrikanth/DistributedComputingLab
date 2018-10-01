<?php
$connect = mysqli_connect("localhost", "Adarsh", "", "FundedProject");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT title FROM funded	WHERE title LIKE '%".$search."%' UNION SELECT title FROM consult	WHERE title LIKE '%".$search."%'";
}
else
{
  //$query = "SELECT dISTINCT(title) FROM funded NATURAL JOIN consult";
	$query = "SELECT DISTINCT(title) FROM funded WHERE title IS NOT NULL UNION SELECT DISTINCT(title) FROM consult WHERE title IS NOT NULL";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output.="<select>";
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option>'.$row["title"].'</option>';
	}
	$output.="</select>";
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

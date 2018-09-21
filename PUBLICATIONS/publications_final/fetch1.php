<?php
$connect = mysqli_connect("localhost", "Adarsh", "", "Publication");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM journal_details
	WHERE year LIKE '%".$search."%' ";
}
else
{
	$query = "
	SELECT DISTINCT(year) FROM journal_details WHERE year IS NOT NULL ORDER BY year";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output.="<select>";
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option>'.$row["year"].'</option>';
	}
	$output.="</select>";
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

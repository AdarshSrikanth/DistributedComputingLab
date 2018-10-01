<?php
$connect = mysqli_connect("localhost", "Adarsh", "", "FundedProject");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT company FROM funded	WHERE company LIKE '%".$search."%' UNION SELECT company FROM consult	WHERE company LIKE '%".$search."%'";
}
else
{
  //$query = "SELECT dISTINCT(title) FROM funded NATURAL JOIN consult";
	$query = "SELECT DISTINCT(company) FROM funded WHERE company IS NOT NULL UNION SELECT DISTINCT(company) FROM consult WHERE company IS NOT NULL";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output.="<select>";
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option>'.$row["company"].'</option>';
	}
	$output.="</select>";
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

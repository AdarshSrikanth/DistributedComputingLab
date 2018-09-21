<?php
$connect = mysqli_connect("localhost", "root", "", "staff_details");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM timetable_staff 
	WHERE name LIKE '%".$search."%' ";
}
else
{
	$query = "
	SELECT DISTINCT(name) FROM timetable_staff WHERE name IS NOT NULL ORDER BY name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output.="<select>";
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option>'.$row["name"].'</option>';
	}
	$output.="</select>";
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
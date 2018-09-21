<?php
	$dbhost = 'localhost';
	$dbuser='root';
	$dbpass='';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'award');
	if(!$conn){
		echo "Conn error";
	}
	else{
		$eid = $_POST['eid'];
		$ename = $_POST['ename'];
				$natureofprogram = $_POST['natureofprogram'];
		$title = $_POST['title'];
				
		$year = $_POST['year'];
				
		//sql_part
		echo $eid;
		echo $ename;
		$sql = "INSERT INTO detail(eid, ename, nature, title, year) VALUES('$eid', '$ename', '$natureofprogram', '$title', '$year')";
		 mysqli_query($conn, $sql);



}
?>
<?php
$recordAdded=false;
if(isset($_GET['status']) && $_GET['status']==1)
	$recordAdded=true;
if($recordAdded){
echo '
<script type="text/javascript">
function hideMsg(){
document.getElementById("popup").style.visibility="hidden";
}
document.getElementById("popup").style.visibility="visible";
window.setTimeout("hideMsg()",50000);
</script>';
}
?>
<html>
<form method="post" action="index.html">
<button type="button" name="back"><a href="index.html">Back</a></button>
</form>
</html>





		
		
		
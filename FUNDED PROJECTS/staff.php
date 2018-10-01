<html>
<head>
	<script>
function completeAndRedirect(){

    var r = confirm("Are you sure you want to View the Published Papers?");
    if (r == true) {
        document.getElementById("myForm").action = "display.php";
       document.getElementById("myForm").submit();
    }
    else
    document.getElementById("myForm").action = "javascript:void(0);";
       
    }
   
</script>
     <link rel="stylesheet" href="css/style3.css">
      <link rel="stylesheet" href="qcss.css">
<style type="text/css">
	table{
	
	border-collapse: collapse;
	width:70%;
	font-family: "Roboto", sans-serif;;
}
th,td{
  border-bottom: 1px solid #ddd;
	text-align: left;

}
tr:nth-child(even)
{

	
}
#label
{
  width:25%;
  height:40%;
  padding:20px;
  border-radius:5px;
 
  color:white;
  text-align: center;
  background-color:#5175c0; 
}
</style>
</head>
<body>
 <div class="login-page">
  <div class="form">
<form id="myForm" method="post" action="javascript:void(0);">
<table>

<td colspan=2><div id="label">Author Name</div><br/><br/></td>

</tr>
<?php
ob_flush();
$db= mysqli_connect('localhost','root','root','fproject');

 $sql="SELECT facultyname from funded";
 $sql1="SELECT name from consult";
 $result =mysqli_query($db,$sql);
 $result1=mysqli_query($db,$sql1);
while($tables = mysqli_fetch_row($result))
{
   
	echo    "<td>";
    echo $tables[0]."</br>";
	echo    "</td>";
?>
<td><button class="button" name="tablename" value="<?php echo $tables[0];?>" onclick="javascript:completeAndRedirect();"  ><span>View</span></button> </td>
 
</br>


<?
echo    "</br></td>";

echo "</tr>";
       
       
}

while($tables1 = mysqli_fetch_row($result1))
{
   
  echo    "<td>";
    echo $tables1[0]."</br>";
  echo    "</td>";
?>
<td>
<button class="button" name="tablename" value="<?php echo $tables1[0];?>" onclick="javascript:completeAndRedirect();"  ><span>View</span></button> </td>
 
</br>


<?
echo    "</br></td>";

echo "</tr>";
       
       
}

?>

</table>
</form>

</body>
</html> 

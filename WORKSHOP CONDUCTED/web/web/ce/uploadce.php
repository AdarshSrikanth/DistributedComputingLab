<?php

//if we clicked on Upload button

if($_POST['Upload'] == 'Upload')

  {

  //make the allowed extensions



  $goodExtensions = array(



  '.doc',



  '.docx', '.pdf'



  );



  $error='';



  //set the current directory where you wanna upload the doc/docx files



  $uploaddir = '../Brochures/';



  $name = $_FILES['filename']['name'];//get the name of the file that will be uploaded



  $min_filesize=10;//set up a minimum file size(a doc/docx can't be lower then 10 bytes)



  $stem=substr($name,0,strpos($name,'.'));



  //take the file extension



  $extension = substr($name, strpos($name,'.'), strlen($name)-1);



  //verify if the file extension is doc or docx



   if(!in_array($extension,$goodExtensions))



     $error.='Extension not allowed (Allowed extensions are .doc, .docx and .pdf)<br>';



echo "<span> </span>"; //verify if the file size of the file being uploaded is greater then 1



   if(filesize($_FILES['filename']['tmp_name']) < $min_filesize)

     $error.='File size too small<br>'."\n";

  $uploadfile = $uploaddir . $stem.$extension;

$filename=$stem.$extension;

if ($error=='')

{

//upload the file to

if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {

header("Location:../add.php");

$query=mysql_query("INSERT INTO programs_attended(eid, ename, natureofprogram, title, duration,fromdate,todate,organised,conference) VALUES('5','hh','Workshop','p','less than a week','12/03/2000','16/03/2000','Great sur','aa')");
}
if($query==true)
{
echo "File Uploaded";
}
}

else echo $error;

}

?>

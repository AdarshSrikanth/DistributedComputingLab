<?php
	require('fpdf/fpdf.php');
	$con=mysqli_connect("localhost","Adarsh","","FundedProject");
    session_start();
	class PDF extends FPDF
	{
	// Load data
	function LoadData($file)
	{
		// Read file lines
		$lines = file($file);
		$data = array();
		foreach($lines as $line)
			$data[] = explode(';',trim($line));
		return $data;
	}
	function BasicTable($header, $data)
	{
		// Header
		foreach($header as $col)
			$this->Cell(40,10,$col,1);
		$this->Ln();
		// Data
		foreach($data as $row)
		{
			foreach($row as $col)
				$this->Cell(40,10,$col,1);
			$this->Ln();
		}
	}

	}
	$var_value=$_POST['status'];
	$var_type=$_POST['type'];
	$pdf = new PDF('P','mm','A3');
	$pdf->AddPage();
	$file=fopen("text1.txt","w") or die("file1 not found");
// Column headings

	//include("config.php");

    /*$error=" ";
    $val=" ";*/
	/*$sql = "SELECT facultyname,title from funded";
    $result = $con->query($sql);

 	$file=fopen("text1.txt","w") or die("file1 not found");
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

		$s=$row['facultyname'].";".$row['title'].";""\r\n";//';
		fputs($file,$s) or die("Data not written ");

        //echo "equipmentno: " . $row["equipmentno"]. "Equipment name: " . $row["equipmentname"]. " " . $row["make"].  "tc".$row['tc']."calib date".$row['calibdate'];
    //echo "<br>";
	}
	}
	else {
    echo "0 results";
	} */

    //fclose($file);
if($var_type="both"){
    $sql="SELECT name,facultyname,title,amount,sfrom,sto,status from funded WHERE status='$var_value' UNION  SELECT company,name,title,amount,fromd,tood,status from consult WHERE  status ='$var_value'";
	}
	if($var_type="consultancy"){
		$sql="SELECT company,name,title,amount,fromd,tood,status from consult WHERE  status ='$var_value'";
	}
	if($var_type="funded"){
		$sql="SELECT name,facultyname,title,amount,sfrom,sto,status from funded WHERE status='$var_value'";
	}
   // WHERE eid='$var'";
	$retval=mysqli_query($con,$sql);

	if(!$retval)
		echo "Not Displayed";
	while($r=mysqli_fetch_array($retval))
	{

      $s=$r['name'].";".$r['facultyname'].";".$r['title'].";".$r['amount'].";".$r['sfrom'].";".$r['sto'].";".$r['status']."\r\n";//';
		fputs($file,$s) or die("Data not written ");

	}

	$header = array('Company Name' ,'Faculty Name', 'Project Title','Amount','From','To','Status');
	// Data loading
	$data = $pdf->LoadData('text1.txt');
	$pdf->SetFont('Arial','',12);

	$pdf->BasicTable($header,$data);

	$pdf->output();

?>

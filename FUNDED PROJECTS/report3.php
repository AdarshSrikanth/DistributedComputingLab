<?php
	require('fpdf/fpdf.php');
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
		{
			$this->Cell(40,7,$col,1);
		}
		$this->Ln();
		// Data
		foreach($data as $row)
		{
			foreach($row as $col)
				$this->Cell(40,6,$col,1);
			$this->Ln();
		}
	}

	}
	
	$pdf = new PDF('P','mm','A4');
	$pdf->AddPage();
// Column headings

	include("config.php");
    $con=mysqli_connect("localhost","root","","calibration_testing");
    session_start();
    $error=" ";
    $val=" ";
	$date = date('Y-m-d');
	$d = date_parse_from_format("Y-m-d", $date);
	//echo "month";
//echo $d["month"];
$mon=$d["month"];
	$sql = "SELECT equipmentno,equipmentname,tc,expirydate from hequipment where MONTH(expirydate)='$mon' and expirydate>'$date'";
    $result = $con->query($sql);
	  
 	$file=fopen("text3.txt","w") or die("file1 not found");
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$s=$row['equipmentno'].";".$row['equipmentname'].";".$row['tc'].";".$row['expirydate']."\r\n";  
		fputs($file,$s) or die("Data not written ");
		
        //echo "equipmentno: " . $row["equipmentno"]. "Equipment name: " . $row["equipmentname"]. " " . $row["make"].  "tc".$row['tc']."calib date".$row['calibdate'];
    //echo "<br>";
	}
	} else 
	{
    //echo "0 results";
	} 
    fclose($file); 
	$header = array('equipmentno', 'equipmentname', 'tc', 'expirydate');
	// Data loading
	$data = $pdf->LoadData('text3.txt');
	$pdf->SetFont('Arial','',14);
	
	$pdf->BasicTable($header,$data);
	 
	$pdf->output();
?>
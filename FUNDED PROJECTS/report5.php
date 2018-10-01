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
			$this->Cell(40,7,$col,1);
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
	$var_value=$_POST['varname'];
	$pdf = new PDF('P','mm','A3');
	$pdf->AddPage();
	$file=fopen("text1.txt","w") or die("file1 not found");
  $sql="SELECT name,facultyname,title,amount,sfrom,sto,status from funded WHERE title='$var_value' UNION  SELECT company,name,title,amount,fromd,tood,status from consult WHERE title='$var_value'";
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
	$pdf->SetFont('Arial','',14);

	$pdf->BasicTable($header,$data);

	$pdf->output();

?>

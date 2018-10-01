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

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
	{
		if($col=="Title")
			$this->Cell(60,7,$col,1);
		else if($col==="Nature of Program")
			$this->Cell(45,7,$col,1);
		else if($col==="From Date")
			$this->Cell(30,7,$col,1);
		else if($col==="To Date")
			$this->Cell(30,7,$col,1);
		else
			$this->Cell(35,7,$col,1);
	}
        
    $this->Ln();
    // Data
    $i=1;
    foreach($data as $row)
    {
        foreach($row as $col)
        {
			$this->SetFont('Arial','',9);
			if($i==1)
				$this->Cell(45,7,$col,1);
			else if($i==2)
				$this->Cell(60,7,$col,1);
			else if($i==3)
				$this->Cell(30,7,$col,1);
else if($i==4)
	$this->Cell(30,7,$col,1);
else if($i==5)	
	$this->Cell(35,7,$col,1);
            
			
			$i++;
		}
            
        //$this->Ln();
    }
}

}
// Better table


$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
// Column headings



	//include("config.php");
    $con=mysqli_connect("localhost","root","","staff_details");
    /*session_start();
    $error=" ";
    $val=" ";*/
    /*$uuc=$_GET['cck'];
    $equipmentno=$_GET['cc'];*/


    /*$query1="SELECT equipmentname from hequipment where equipmentno='$uuc'";
    $result1=$con->query($query1);
    if(!$result1)
    {
	echo 'could not run query: '.mysql_error();
	}
	$arrayresult1=mysqli_fetch_array($result1);
	$cc1=$arrayresult1['equipmentname'];*/
    $d=date('d-m-Y');
    $query1="SELECT CURDATE()";// from dual";
    $pdf->SetFont("Arial","U","11");
    $pdf->SetTextColor(0,0,255);
    $pdf->SetLeftMargin(4);
    $pdf->ln();  
$pdf->Cell(0,6,"PSG COLLEGE OF TECHNOLOGY",0,1,"C"); //width,height,content,border,line,align
$pdf->Ln();
$header = array('');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,"Staff Workshop Details",0,1,"C");
$header = array('Nature of Program', 'Title','From Date','To Date','Organized by');
$data = $pdf->LoadData('file1.txt');
$pdf->SetFont('Arial','',9.5);
$pdf->BasicTable($header,$data);
$pdf->Ln(3);
$pdf->Output();
?>
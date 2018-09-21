<html>
<a href="index.html"> BACK TO HOME </a>


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
		$this->Cell(45,7,$col,1);
		
	}
        
    $this->Ln();
    // Data
    $i=1;
    foreach($data as $row)
    {
        foreach($row as $col)
        {
			$this->SetFont('Arial','',9);
			$this->Cell(45,7,$col,1);
		
            
			
			$i++;
		}
            
        $this->Ln();
    }
}

}
// Better table


$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
// Column headings



	//include("config.php");
    $con=mysqli_connect("localhost","root","","award");
    /*session_start();
    $error=" ";
    $val=" ";*/
    /*$uuc=$_GET['cck'];
    $equipmentno=$_GET['cc'];*/


    
   
    $pdf->SetFont("Arial","U","11");
    $pdf->SetTextColor(0,0,255);
    $pdf->SetLeftMargin(4);
    $pdf->ln();  
$pdf->Cell(0,6,"PSG COLLEGE OF TECHNOLOGY",0,1,"C"); //width,height,content,border,line,align
$pdf->Ln();
$header = array('');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,"FACULTY AWARD DETAILS",0,1,"C");
$header = array('Name','Nature', 'Title','year');
$data = $pdf->LoadData('file1.txt');
$pdf->SetFont('Arial','',9.5);
$pdf->BasicTable($header,$data);
$pdf->Ln(3);
$pdf->Output();
?>
</html>
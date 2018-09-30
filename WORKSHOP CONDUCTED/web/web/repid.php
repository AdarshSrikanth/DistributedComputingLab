<?php
		//include_once('fpdf.php');
		//define('FPDF_FONTPATH','C:\wamp64\www\fpdf-1-6-es');
//require('fpdf.php');
require('fpdf17/fpdf.php');
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="staff_details";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$eid = $_POST['eid'];
	class PDF extends FPDF
	{
	// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(5);
    // Title
    $this->Cell(50,05,'Employee List',1,0,'C');
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//$db = new dbObj();
//$connString =  $db->getConnstring();
//$pdf->Cell(0,6,"PSG COLLEGE OF TECHNOLOGY",0,1,"C"); //width,height,content,border,line,align
//$pdf->Ln();
//$header = array('');
//$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,6,"Staff Workshop Details",0,1,"C");
$display_heading = array('eid'=>'ID', 'ename'=> 'Name', 'natureofprogram'=> 'nop','nameofworkshop'=> 'Workshop','duration'=> 'Duration','fromdate'=>'FromDate','todate'=>'ToDate','venue'=>'Venue','noofparticipants'=>'Participants','sponsoringagencies'=>'Sponsors', 'Resourceperson'=>'RP');

$result = mysqli_query($conn, "SELECT eid,ename,natureofprogram,nameofworkshop,duration,fromdate,todate,venue,noofparticipants,sponsoringagencies,Resourceperson FROM programs_conducted WHERE eid='$eid'") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM programs_conducted");
$res = mysqli_fetch_array($result);
$pdf = new FPDF('L');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$i=0;
foreach($header as $heading) {
$i++;
$pdf->Cell(25, 12, $display_heading[$heading['Field']],1);
}
$pdf->Ln();
$pdf->Cell(25, 12, $i);
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(25,12,$column,1);
}
$pdf->Output();
?>

<?php
#ob_start();
session_start();
$email=$_SESSION["curntmail"];
$co_id=$_SESSION["clg__id"];

ini_set("session.auto_start", 0);
require_once("DBController.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM mba WHERE p_key='$co_id'");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_NAME`='test'");
require('fpdf.php');

class PDF extends FPDF
{
/* Page header */
function Header()
{
    $this->Image('logo.png',10,6,20);
     $this->Ln(5);
    $this->SetFont('Arial','B',15);
    /* Move to the right */
    $this->Cell(100);
  
    $this->Cell(70,10,'Tamilnadu MBA/MCA Admissions 2020',0,0,'C');
    $this->SetLineWidth(2);
   
    $this->Ln(10);
    
    $this->Cell(100);
    $this->Cell(70,10,'PROVISIONAL ALLOTMENT',0,0,'C');
    $this->SetLineWidth(2);
   
    $this->Ln(10);
    
}
/* Page footer */
function Footer()
{
    /* Position at 1.5 cm from bottom */
    $this->SetY(-15);
    /* Arial italic 8 */
    $this->SetFont('Arial','I',8);
    /* Page number */
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->addPage('L');
$pdf->SetFont('Arial','B',12);		



$pdf->SetTitle('Tamilnadu MBA/MCA Addmissions 2020');

$pdf->Cell(45,12,'District',1);
$pdf->Cell(40,12,'College Code',1);
$pdf->Cell(200,12,'College Name',1);

foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
     $pdf->Cell(45,24,$row['district'],1);
     $pdf->Cell(40,24,$row['c_code'],1);
     $pdf->MultiCell(200,12,$row['c_name'],1);

}
$pdf->Ln(10);
$pdf->Cell(70,10,'                                          The above college is alloted as per your preference',0,0,'C');
$pdf->Ln(10);
// $pdf->Cell(100,10,'Alignment = R',1,R,'C');
$pdf->Output();
#ob_end_flush(); 
?>
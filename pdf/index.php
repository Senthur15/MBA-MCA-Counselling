<?php
// Starting session
session_start();
$email2=$_SESSION["curntmail"];

#ob_start();
ini_set("session.auto_start", 0);
require_once("DBController.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM prefrence where email='$email2' ");
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
    $this->Cell(70,10,'College Preference Sheet',0,0,'C');
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

$pdf->Cell(25,12,'Preference',1);
$pdf->Cell(45,12,'Category',1);
$pdf->Cell(50,12,'College Type',1);
$pdf->Cell(150,12,'College Name',1);

foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
    
    $v1=$row['p1'];
    $v2=$row['p2'];
    $v3=$row['p3'];
    $v4=$row['p4'];
    $v5=$row['p5'];
    $v6=$row['p6'];
    $v7=$row['p7'];
    $v8=$row['p8'];
    $v9=$row['p9'];
    $v10=$row['p10'];
    
    
    $r1 = $db_handle->runQuery("SELECT * from mba where p_key=$v1 ");
    $r2 = $db_handle->runQuery("SELECT * from mba where p_key=$v2 ");
    $r3 = $db_handle->runQuery("SELECT * from mba where p_key=$v3 ");
    $r4 = $db_handle->runQuery("SELECT * from mba where p_key=$v4 ");
    $r5 = $db_handle->runQuery("SELECT * from mba where p_key=$v5 ");
    $r6 = $db_handle->runQuery("SELECT * from mba where p_key=$v6 ");
    $r7 = $db_handle->runQuery("SELECT * from mba where p_key=$v7 ");
    $r8 = $db_handle->runQuery("SELECT * from mba where p_key=$v8 ");
    $r9 = $db_handle->runQuery("SELECT * from mba where p_key=$v9 ");
    $r10 = $db_handle->runQuery("SELECT * from mba where p_key=$v10 ");
    
   
    
    
    foreach($r1 as $row1)
    {
    $pdf->Cell(25,12,'1',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    
    foreach($r2 as $row1)
    {
    $pdf->Cell(25,12,'2',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    
    foreach($r3 as $row1)
    {
    $pdf->Cell(25,12,'3',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r4 as $row1)
    {
    $pdf->Cell(25,12,'4',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r5 as $row1)
    {
    $pdf->Cell(25,12,'5',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r6 as $row1)
    {
    $pdf->Cell(25,12,'6',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r7 as $row1)
    {
    $pdf->Cell(25,12,'7',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r8 as $row1)
    {
    $pdf->Cell(25,12,'8',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r9 as $row1)
    {
    $pdf->Cell(25,12,'9',1);
    $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    foreach($r10 as $row1)
    {
    $pdf->Cell(25,12,'10',1);
   $pdf->Cell(45,12,$row1['category'],1);
    $pdf->Cell(50,12,$row1['c_type'],1);
    $pdf->MultiCell(150,12,$row1['c_name'],1);
    $pdf->Ln();
    
    }
    
    
//     $pdf->Cell(50,12,$row['c_type'],1);
//     $pdf->MultiCell(150,12,$row['c_name'],1);

}
$pdf->Output();
#ob_end_flush(); 
?>

<?php
require('fpdf/fpdf.php');
session_start();


class PDF extends FPDF
{
	function Header()
{
	// Logo
	$this->Image('logo.png',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(30,10,'Title',1,0,'C');
	// Line break
	$this->Ln(20);
}
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

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B',10);
    // Header
    $w = array(46, 46, 47, 46);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],14,$header[$i],1,0,'J',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('','');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],12,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],12,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],12,$row[2],'LR',0,'R',$fill);
        $this->Cell($w[3],12,$row[3],'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$pdf->SetTitle('Report cum Bill for '.$_SESSION['username']);
$header = array('Consumption Slab (kWh)', 'Demand Charge (Rs/Mth.)', 'Wheeling Charge (Rs/kWh) ', 'Energy Charge (Rs/kWh)');
// Data loading
$data = $pdf->LoadData('rates.txt');
$pdf->SetFont('Arial','',11);
$pdf->AddPage();
$pdf->Image('logo.png',10,6,30);
  $pdf->Ln(30);
  $pdf->Ln();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>
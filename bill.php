<?php
require('fpdf/fpdf.php');
session_start();
/*$servername = "localhost";
$naam=$_REQUEST["u"];
$pasword=md5($_REQUEST["p"]);
$dbname = "sprdh";
$username="root";
$password="";
$_SESSION["username"]=$naam;
$conn = new mysqli($servername, $username, $password, $dbname);
*/


class PDF extends FPDF
{
	
	function Header()
{
	// Logo
	$this->Image('fpdf/logo.png',10,6,30,0,'','dashboard.html');
	
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(60);
	// Title
	$this->Cell(100,10,'Billing Report for '.$_SESSION["fname"].'',1,0,'C');
	// Line break
    

	$this->Ln(30);
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
	$this->Ln(10);
}	
function DispBill($header, $pow)
{	
	$this->SetFont('Arial','',13);
	$totalpow=0;
	$cost=0;
	 foreach($pow as $row)
    {
        $this->Cell(10,12,"The Power Consumed from 12hrs to 13hrs = ".$row[1]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 13hrs to 14hrs = ".$row[2]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 14hrs to 15hrs = ".$row[3]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 15hrs to 16hrs = ".$row[4]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 16hrs to 17hrs = ".$row[5]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 17hrs to 18hrs = ".$row[6]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 18hrs to 19hrs = ".$row[7]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 19hrs to 20hrs = ".$row[8]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 20hrs to 21hrs = ".$row[9]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 21hrs to 22hrs = ".$row[10]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 22hrs to 23hrs = ".$row[11]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 23hrs to 0hrs = ".$row[12]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 0hrs to 1hrs = ".$row[13]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 1hrs to 2hrs = ".$row[14]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 2hrs to 3hrs = ".$row[15]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 3hrs to 4hrs = ".$row[16]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 4hrs to 5hrs = ".$row[17]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 5hrs to 6hrs = ".$row[18]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 6hrs to 7hrs = ".$row[19]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 7hrs to 8hrs = ".$row[20]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 8hrs to 9hrs = ".$row[21]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 9hrs to 10hrs = ".$row[22]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 10hrs to 11hrs = ".$row[23]." Watts",0,0,'L');
		$this->Ln();
		$this->Cell(10,12,"The Power Consumed from 11hrs to 12hrs = ".$row[24]." Watts",0,0,'L');
		$this->Ln(20);
		$this->Cell(180,0,'','T');
		$this->Ln(10);
		$this->SetFont('Arial','',15);
		$this->Cell(10,12,"The Total Power Consumed in the last 24 hours =".$row[25]." Watts",0,0,'L');
		
		for($i=1;$i<=24;$i++)
		{if($totalpow<1000)
			{
				$totalpow=$totalpow+number_format($row[$i]);
				$cost=$cost+$totalpow*0.003;
			}
		elseif($totalpow<3000)
			{
				$totalpow=$totalpow+number_format($row[$i]);
				$cost=$cost+($totalpow-1000)*0.0067;
			}
		elseif($totalpow<5000)
			{
				$totalpow=$totalpow+number_format($row[$i]);
				$cost=$cost+($totalpow-3000)*0.0097;
			}
		elseif($totalpow<7000)
			{
				$totalpow=$totalpow+number_format($row[$i]);
				$cost=$cost+($totalpow-5000)*0.0112;
			}
		else
			{
				$totalpow=$totalpow+number_format($row[$i]);
				$cost=$cost+($totalpow-7000)*0.0125;
			}	
		}	
		$this->Ln(15);
		$this->Cell(10,12,"The Energy Cost of Power Consumed in the last 24 hours = Rs.".$cost.".",0,0,'L');
		$this->Ln(15);
		$this->Cell(10,12,"The Fixed Demand Charge for 24 hours = Rs.6.",0,0,'L');
		$this->Ln(15);
		$wcost=$totalpow*0.0012;
		$this->Cell(10,12,"The Wheeling Charge of Power Consumed in the last 24 hours = Rs.".$wcost.".",0,0,'L');
		$cost=$cost+$wcost+6;
		$this->Ln(20);
		$this->Cell(180,0,'','T');
		$this->Ln(10);
		$this->SetFont('Arial','',17);
		$this->Cell(10,12,"The Total Cost of Power Consumed in the last 24 hours = Rs.".$cost."",0,0,'L');
    }
	
}
}


$pdf = new PDF();
// Column headings
$pdf->SetTitle('ECS Bill');
$header = array('Consumption Slab (W)', 'Demand Charge (Rs/Day)', 'Wheeling Charge (Rs/W) ', 'Energy Charge (Rs/W)');
// Data loading
$data = $pdf->LoadData('fpdf/rates.txt');
$pdf->SetFont('Arial','',11);
$pdf->AddPage();

$fname='fpdf/csv/'.$_SESSION["username"].'.csv';  
$pow = $pdf->LoadData($fname);
$pdf->DispBill($header,$pow);
$pdf->ln(50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,12,"Please scroll down to view the Consumption Slab Pricing !!",0,0,'L');
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->ln(15);
$pdf->Cell(10,12,"© 2018 Electricity Consumption System, made with love for a better life :)",0,0,'L');
$pdf->Output();
?>
<?php
require ('fpdf18/fpdf.php');
session_start();
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }
$username=$_SESSION['uname']; 
      $selected_ticket=$_SESSION['selected-ticket'];

$db=new PDO('mysql:host=localhost;dbname=travel_system','root','root');
class ticketpdf extends FPDF
{
    
    function header()
    {
    $this->image('train-logo.png',10,6);
    $this->SetFont('Arial','B',26);
    $this->cell(250,10,'Tour N Travels',0,0,'C');
        $this->SetFont('Arial','B',16);
        $this->Ln();
            $this->cell(250,10,'Train Ticket',0,0,'C');

        $this->Ln(60);

  
    
    }
    
    function headertable()
    {
        
    $this->SetFont('Arial','B',14);
    $this->Cell(55,10,'Train No.',1,0,'C');        
    $this->Cell(50,10,'Train Name',1.0,'C');        
    $this->Cell(50,10,'Jorney Date',1,0,'C');        
    $this->Cell(30,10,'Class',1,0,'C');        
    $this->Cell(50,10,'Total Fare',1,0,'C');        
    $this->Cell(50,10,'Payment Status',1,0,'C');        
                $this->Ln();

    }
    function viewtable($db,$username,$selected_ticket)
    {
          $this->SetFont('Arial','B',12);
          $sql1=$db->query("select * from $username where sno='$selected_ticket'");
        while($data=$sql1->fetch(PDO::FETCH_OBJ))
       
        {
                 
                    $this->Cell(55,10,$data->train_no,1,0,'C');    $this->Cell(50,10,$data->train_name,1.0,'C');        
    $this->Cell(50,10,$data->date_journey,1,0,'C');        
    $this->Cell(30,10,$data->class,1,0,'C');        
    $this->Cell(50,10,'Rs. '.$data->fare,1,0,'C');
                $this->Cell(50,10,'Successful',1,0,'C');        


        }
  
        
    }
    
}
$pdf=new ticketpdf();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headertable();
$pdf->viewtable($db,$username,$selected_ticket);
$pdf->Output();

?>
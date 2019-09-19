<?php 
require('WriteHTML.php');

$pdf=new PDF_HTML();
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();
$pdf->Image('img/northportmmc_logo.png',20,15,25);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1> NORTHPORT (MALAYSIA) BHD</h1><br>
Information Services Department</u></para><br><br><br><br>E-mail Account Application<br/><br/>');
$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>
<TR>
<TD>Name:</TD>
<TD>'.$_POST['name'].'</TD>
</TR>
<TR>
<TD>Email:</TD>
<TD>'.$_POST['email'].'</TD>
</TR>
<TR>
<TD>URl:</TD>
<TD>'.$_POST['url'].'</TD>
</TR>
<TR>
<TD>Comment:</TD>
<TD>'.$_POST['comment'].'</TD>
</TR>
</TABLE>';
$pdf->WriteHTML2("$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>
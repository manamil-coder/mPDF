<?php
$styleCss ='';

include('mpdf.php');

$mpdf=new mPDF('c'); 
$mpdf->AddPage();
$mpdf->showWatermarkImage = false;
$mpdf->WriteHTML(''.$styleCss.'');

$mpdf->Output('invoice/invoice-'.$get_invoice_id.'.pdf', '');

exit;
?>	
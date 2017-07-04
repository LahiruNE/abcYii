<?php
$path = Yii::app()->basePath;
require_once($path . '/extensions/tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Jara');
$pdf->SetTitle('INVOICE');
$pdf->SetSubject('Invoice');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'en';
$lg['w_page'] = 'page';

$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Invoice', '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, '', '', 0, 'S', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

$date = date('Y-m-d'); 
$regFee = 15000;
$termFee = (int)$this->termFee; 
$total = $regFee + $termFee;

$details='
        <table>
            <tr>
                <td>
                    Next Step Webs, Inc.<br>
                    12345 Sunny Road<br>
                    Sunnyville, TX 12345
                </td>
                
                <td align="right">
                    Invoice #: 123<br>
                    Created: '.$date.'<br>
                    Due: '.$date.'
                </td>
            </tr>
        </table>

';
$pdf->writeHTML($details, true, false, false, false, ''); 

//studentDetails table
$tbl = '<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <th colspan="4" style="background-color:#6d6f70"><h3>Student Details</h3></th>
    </tr>    
    <tr>
        <td style="background-color:#e5e3e3"><b>Stdent ID</b></td>
        <td>'.$model->stuId.'</td>
        <td style="background-color:#e5e3e3"><b>Grade</b></td>
        <td>'.$model->grade.'</td>
    </tr>
    <tr>
        <td style="background-color:#e5e3e3"><b>Student\'s Name</b></td>
        <td>'.$model->firstName.' '.$model->lastName.'</td>
        <td style="background-color:#e5e3e3"><b>Contact No.</b></td>
        <td>'.$model->contactNo.'</td>
    </tr>
    <tr>
        <td style="background-color:#e5e3e3"><b>Address</b></td>
       <td colspan="3">'.$model->address.'</td>
    </tr>
</table>
';

$pdf->writeHTML($tbl, true, false, false, false, '');

$tbl = '<table cellspacing="0" cellpadding="1" border="1">
    <tr style="background-color:#6d6f70">
        <th><h3>Date</h3></th>
        <th><h3>Description</h3></th>
        <th><h3>Price(Rs.)</h3></th>
        <th><h3>Total(Rs.)</h3></th>
    </tr>    
    <tr>
        <td>'.$date.'</td>
        <td>Registation Fee</td>
        <td>'.$regFee.'.00</td>
        <td>'.$regFee.'.00</td>
    </tr>
    <tr style="background-color:#e5e3e3">
        <td>'.$date.'</td>
        <td>Term Fee</td>
        <td>'.$termFee.'.00</td>
        <td>'.$termFee.'.00</td>
    </tr>
    <tr>
        <td colspan="3"><b>Total</b></td>
        <td>'.$total.'.00</td>
    </tr>
</table>
';

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->Output('example_006.pdf', 'D'); 



?>

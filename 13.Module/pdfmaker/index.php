<?php
// Include Composer's autoload file
require_once 'vendor/autoload.php';

// Directly create an instance of TCPDF (no need for `use`)
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('My App');
$pdf->SetAuthor('Soykot Hosen');
$pdf->SetTitle('Sample PDF');
$pdf->SetSubject('PDF Generation Example');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Add content
$html = '<h1>Welcome to TCPDF</h1>
         <p>This is a sample PDF generated in PHP using TCPDF.</p>';
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF
$pdf->Output('example.pdf', 'I'); // 'I' to display inline, 'D' to download

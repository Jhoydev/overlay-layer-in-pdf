<?php

require_once __DIR__ . '/../vendor/autoload.php';

use setasign\Fpdi\Fpdi;
$filename = 'pdf.pdf';
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pageCount = $pdf->setSourceFile($filename);
for ($n = 1; $n <= $pageCount; $n++) {
    $pdf->AddPage();
    $pageId = $pdf->importPage($n);
    $pdf->useTemplate($pageId);

    $pdf->Image('as.png', 72, 30,18,14);
    $pdf->Image('as.png', 72, 144,18,14);

}
$pdf->Output('F', 'generated.pdf');

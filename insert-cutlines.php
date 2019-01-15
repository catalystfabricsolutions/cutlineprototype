<?php

require_once('vendor/autoload.php');

// #F26522
$imageFile   = __DIR__ . '/assets/imagefile.jpg';
$cutLineFile = __DIR__ . '/assets/cutlines.ai';
$outputFile  = __DIR__ . '/output.pdf';
$dimensions  = getimagesize($imageFile);
$width       = $dimensions[0];
$height      = $dimensions[1];
$orientation = ($height>$width) ? 'P' : 'L';
$pdf         = new TCPDF($orientation, 'pt', [ $width, $height ], true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Catalyst Fabric Solutions');
$pdf->SetTitle('Cutline Insert Proof of Concept');
$pdf->SetSubject('Proof that a PDF can be generated with cutlines from AI');
$pdf->SetMargins(0, 0, 0, 0);
$pdf->SetAutoPageBreak(false, 0);

// add a page
$pdf->AddPage();//$orientation, [$width, $height], false);

// set JPEG quality
$pdf->setJPEGQuality(100);

$pdf->Image($imageFile, 0, 0, $width, $height);
$pdf->ImageEps($cutLineFile, 0, 0, $width, $height);
$pdf->Output($outputFile, 'F');


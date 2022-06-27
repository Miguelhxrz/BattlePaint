<?php 
require ('../model/reports.php');
require_once('../model/Nft.php');
error_reporting(0);

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de NFTs Registrados", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(30, 5, "Token", 1, 0, "C");
  $pdf->Cell(30, 5, "Name", 1, 0, "C");
  $pdf->Cell(30, 5, "Poder", 1, 0, "C");
  $pdf->Cell(30, 5, "Clases", 1, 0, "C");
  $pdf->Cell(30, 5, "Rango", 1, 0, "C");
  $pdf->Cell(30, 5, "Propietario", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de Registro", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $nft = new Nft;
  $question = $nft->AllNFTs();
  for ($i=0; $i<count($question); $i++){
    //`token`, `name`, `power`, `class`, `rank`, `owner`, `price`
    
    $pdf->Cell(30, 5, $question[$i]['token'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['name'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['power'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['class'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['rank'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['owner'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['fecha'], 1, 1, "C");

  }

  $pdf->Output();
?> 
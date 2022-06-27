<?php 
require ('../model/reports.php');
require_once('../model/coins.php');
error_reporting(0);

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Compra de Moneda PB", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(60, 5, "ID de Compra", 1, 0, "C");
  $pdf->Cell(60, 5, "ID de Usuario", 1, 0, "C");
  $pdf->Cell(60, 5, "Monto de Compra", 1, 0, "C");
  $pdf->Cell(60, 5, "Fecha de Compra", 1, 1, "C");


  $pdf->SetFont("Arial","",9);

  $coin = new Coin();
  $question = $coin->AllCoins();
  for ($i=0; $i<count($question); $i++){
    //`id`, `Id_user`, `monto`, `fecha`
    
    $pdf->Cell(60, 5, $question[$i]['id'], 1, 0, "C");
    $pdf->Cell(60, 5, $question[$i]['Id_user'], 1, 0, "C");
    $pdf->Cell(60, 5, $question[$i]['monto'], 1, 0, "C");
    $pdf->Cell(60, 5, $question[$i]['fecha'], 1, 1, "C");


  }

  $pdf->Output();
?> 
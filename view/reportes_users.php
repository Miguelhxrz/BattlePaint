<?php 
require ('../model/reports.php');
require_once('../model/User.php');
error_reporting(0);

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Usuarios Registrados", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(30, 5, "ID", 1, 0, "C");
  $pdf->Cell(30, 5, "Usuario", 1, 0, "C");
  $pdf->Cell(30, 5, "Contraseña", 1, 0, "C");
  $pdf->Cell(60, 5, "Correo", 1, 0, "C");
  $pdf->Cell(40, 5, "Fecha de Nacimiento", 1, 0, "C");
  $pdf->Cell(15, 5, "Genero", 1, 0, "C");
  $pdf->Cell(40, 5, "Fecha de Registro", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $user = new User;
  $question = $user->AllUsers();
  for ($i=0; $i<count($question); $i++){
    //`id`, `username`, `password`, `email`, `birth`, `gender`, `fecha` 
    
    $pdf->Cell(30, 5, $question[$i]['id'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['username'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['password'], 1, 0, "C");
    $pdf->Cell(60, 5, $question[$i]['email'], 1, 0, "C");
    $pdf->Cell(40, 5, $question[$i]['birth'], 1, 0, "C");
    $pdf->Cell(15, 5, $question[$i]['gender'], 1, 0, "C");
    $pdf->Cell(40, 5, $question[$i]['fecha'], 1, 1, "C");

  }

  $pdf->Output();
?> 
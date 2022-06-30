<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//utilise composer pour gérer l'autoloading
//à partir de là toutes mes librairies sont chargées ! 
include "../vendor/autoload.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pokemon = "pikachu";
$pdf->Cell(40,10,$pokemon);
$pdf->Output();

die();

//1. se mettre en lien avec le model
include "../model/model.php";

//2. demander les données au modèle
$animaux = getAllAnimaux();

//3. inclure le bon template.
include "../template/indexView.php";
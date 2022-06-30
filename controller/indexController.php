<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//1. se mettre en lien avec le model
include "../model/model.php";

//2. demander les données au modèle
$animaux = getAllAnimaux();

//3. inclure le bon template.
include "../template/indexView.php";
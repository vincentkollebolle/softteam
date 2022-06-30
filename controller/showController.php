<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//1. je me met en lien avec le modele
include "../model/model.php";

//2. je demande au model un animal en particulier grâce a l'ID que j'ai récupéré
//dans l'url
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$animal = getAnimalById($id);

//3./ inclure le bon template
include "../template/showView.php";
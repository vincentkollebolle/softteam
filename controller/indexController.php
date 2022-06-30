
<?php
//1./ se connecter a la base de données
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "model/model.php";

$animaux = get_all_animaux();

include "template/listView.php";
?>

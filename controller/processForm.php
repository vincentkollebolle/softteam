<?php
/*
    KISS : Keep It Simple and Stupid
    NTU : Never Trust the Users
*/
error_reporting(E_ALL);
ini_set("display_errors", 1);
    //print_r($_POST);
    $prenom = $_POST['key_prenom'];
    $nom = $_POST['key_nom'];
    $date = $_POST['key_birthday']; // NTU !!!!!!!! ici on fait pour l'instant
    //confiance à l'utiliseur pour nous fournir une date au bon format !
    $birthdate = new DateTime($date);
    $today = new DateTime("now");

    //$sql = "INSERT INTO contact .... $_POST[...]
    echo "on s'apprete à créer un enregistrement pour ".$prenom." ".$nom." :) ";
    echo $prenom." est néé le ".$date;
    echo "<br />";
    echo $today->format("d/m/Y");
    $interval = $birthdate->diff($today);
    echo "<br />";
    echo "vincent a :".$interval->format('%R%a days')." jours";
    echo "<br />Vincent est né un ".$birthdate->format('l');
?>
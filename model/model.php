<?php
/*
* Petite librairie proposant toutes les fonctions nécessaire
* pour aller chercher des choses dans la bdd
*/ 

//renvoi un tableau avec les animaux dedans
function getAllAnimaux() {
    try{
        $db = new pdo(
            'mysql:host=127.0.0.1;port=3306;dbname=softteam;charset=utf8',
            'softteam',
            'softteam',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    }
    
    $sql = "SELECT * FROM animal;";
    $animaux = array();
    foreach ($db->query($sql) as $row) {
        $animaux[] = $row;
    }
    return $animaux;
}
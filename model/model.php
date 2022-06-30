<?php
/*
* Petite librairie proposant toutes les fonctions nécessaire
* pour aller chercher des choses dans la bdd
*/ 
//DRY
function connectDB() {
    try{
        $db = new pdo(
            'mysql:host=127.0.0.1;port=3306;dbname=softteam;charset=utf8',
            'softteam',
            'softteam',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    }
    return $db;
}

//renvoi un tableau avec les animaux dedans
function getAllAnimaux() {
    $db = connectDB();
    $sql = "SELECT * FROM animal;";
    $animaux = array();
    foreach ($db->query($sql) as $row) {
        $animaux[] = $row;
    }
    return $animaux;
}

//renvoi un tableau avec l'animal demandé
function getAnimalById($id) {
    $db = connectDB();
    $query = 'SELECT * FROM animal WHERE id=:id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}
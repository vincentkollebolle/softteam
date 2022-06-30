<?php
//fonction qui ramène tout les animaux
function get_all_animaux()
{

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=softteam', "softteam", "softteam");
        $animaux = array();
        foreach ($dbh->query('SELECT * from animal') as $row) {
            $animaux[] = $row;
        }
        $dbh = null;
        return $animaux;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
//fonction qui ramène un animal a partir de son id
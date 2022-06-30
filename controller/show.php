<?php


//1./ me connecter à la base de donnée

try {
    $dbh = new PDO('mysql:host=localhost;dbname=softteam', "softteam", "softteam");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


//2./ récupérer auprès de l'utilisateur l'identifiant de l'enregistrement
//que l'on souhaite afficher
$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
echo "youpi je suis protégé des injections SQL !!!! maintenant le paramètre: ";
echo $id." ne pourra plus jamais me poser de problème !";

$query = 'SELECT * FROM animal WHERE id=:id';
$statement = $link->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
//Execute query();

//3./ afficher cette enregistrement
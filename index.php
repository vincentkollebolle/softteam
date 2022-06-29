<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.animal { 
            border:1px solid black;
            padding:10px;
            margin:10px;
            background-color: #efefef;
        }
    </style>
</head>
<body>
<?php
//1./ se connecter a la base de données
error_reporting(E_ALL);
ini_set("display_errors", 1);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=softteam', "softteam", "softteam");
    foreach($dbh->query('SELECT * from animal') as $row) {
        ?>
            <div class="animal">
                <ul>
                    <li><label>id: </label><?=$row['id']?></li>
                    <li><label>nom: </label><?=$row['nom']?></li>
                    <li><label>espece: </label><?=$row['espece']?></li>
                    <li><label>caractere: </label><?=$row['caractere']?></li>

                </ul>
            </div>
        <?php
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php
/*
KISS = KEEP IT SIMPLE AND STUPID !
NTU = NEVER TRUST THE USERS !
DRY = DON'T REPEAT YOURSELF ! 
RTFM = READ THE F***** MANUAL ! 
Classe 
Objet (une instance de classe)
Constructeur 
portée 
encapsulation (private, public, protected)
composition(un objet est composé parfois d'autre objet)
*/
?>
</body>
</html>

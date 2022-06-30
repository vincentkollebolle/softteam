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
<?php foreach($animaux as $row) { ?>
<div class="animal">
    <ul>
        <li><label>id: </label><?= $row['id'] ?></li>
        <li><label>nom: </label><?= $row['nom'] ?></li>
        <li><label>espece: </label><?= $row['espece'] ?></li>
        <li><label>caractere: </label><?= $row['caractere'] ?></li>
        <li><a href="show.php?id=<?= $row['id'] ?>">Voir le détail</a></li>

    </ul>
</div>
<?php } ?>

</body>
</html>

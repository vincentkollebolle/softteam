<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.animal { background:#efef00; border: 1px solid black; margin: 10px; padding:10px;}
    </style>
</head>
<body>

    <?php
        foreach($animaux as $animal) {
            ?>
                <div class="animal">
                    <h1><?=$animal['nom']?> ( <?=$animal['espece']?>) </h1>
                </div>
            <?php
        }

    ?>
</body>
</html>
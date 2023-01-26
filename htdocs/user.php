<?php


// # PHP - Les paramètres d'URL
// ## Exercice 1
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**

// ## Exercice 2
// Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

// ## Exercice 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

// ## Exercice 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**

// ## Exercice 5
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**

// ## Exercice 6
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function isGet($parameter, $default = "Un paramètre n'est pas renseigné"){
        if (isset($_GET[$parameter])){
            if ($_GET[$parameter]){
                return $_GET[$parameter];
            } else {
                return $default;
            };
        } else {
            return $default;
        };
        // isset($_GET[$parameter])? return $_GET[$parameter]: return $default;
    };

    function isPost($parameter, $default = "Un paramètre n'est pas renseigné"){
        if (isset($_POST[$parameter])){
            if ($_POST[$parameter]){
                return $_POST[$parameter];
            } else {
                return $default;
            };
        } else {
            return $default;
        };
    };

    ?>
    Prénom GET : <?= isGet("firstname", "Le prénom n'est pas renseigné") ?> <br>
    Nom GET: <?= isGet("lastname", "Le nom n'est pas renseigné") ?> <br>
    <hr>
    Civilité : <?= isPost("civility", "Votre civilité n'est pas renseignée"); ?> <br>
    Prénom POST : <?= isPost("firstname", "Le prénom n'est pas renseigné") ?> <br>
    Nom POST: <?= isPost("lastname", "Le nom n'est pas renseigné") ?> <br>
    <br>
    <hr>
    <br>
    <a href="index.php">Retour Index</a>
</body>
</html>
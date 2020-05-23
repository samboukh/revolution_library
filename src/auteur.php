<?php
session_start();
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Livres</title>
            <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/styleglobal.css">
</head>
<body>
<?php include "bdd.php"?>
<?php include "header.php" ?>
    <h1 class="h1Authors">Voici la liste de tous nos auteurs</h1>

        <?php
        $reponse = $bdd->query('SELECT * FROM personne');

    while ($donnees = $reponse->fetch()) { ?>
            <div class="auteurs">
        <?php
            echo '<div class="auteur"><p>'.$donnees["id"]. '</p>';
            echo '<p>Nom: ' . $donnees["nom"] . '</p>';
            echo '<p>Prénom: '.$donnees["prenom"].'</p></div>';
        }
    ?>
</body>
</html>
<?php
session_start();
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Auteurs</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/styleglobal.css">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php" ?>
    <h1>Voici la liste de tous nos auteurs</h1>
<?php include "bdd.php"?>
        <?php
        $reponse = $bdd->query('SELECT * FROM personne');

    while ($donnees = $reponse->fetch()) { ?>
            <div class="auteurs">
            <section>
                <a href="details_auteur.php?id=<?= ($donnees['id']) ?>">
        <?php
            echo '<p>'.$donnees["id"]. '</p>';
            echo '<p>Nom: ' . $donnees["nom"] . '</p>';
            echo '<p>Prénom: '.$donnees["prenom"].'</p>';
        }
    ?>
            </section>
</body>
</html>
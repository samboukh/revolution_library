<?php
session_start();
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Livres</title>
            <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styleglobal.css">
</head>
<body>
    <h1>Voici la liste de tous nos auteurs</h1>
<?php include "bdd.php"?>
        <?php
        $reponse = $bdd->query('SELECT * FROM personne');

    while ($donnees = $reponse->fetch()) { ?>
            <div class="auteurs">
        <?php
            echo '<p>'.$donnees["id"]. '</p>';
            echo '<p>Nom: ' . $donnees["nom"] . '</p>';
            echo '<p>Prénom: '.$donnees["prenom"].'</p>';
        }
    ?>
</body>
</html>
<?php
session_start();
ini_set('display_errors', 'on');
$template='livres';
include 'livres.phtml';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Livres</title>
            <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styleglobal.css">
</head>
    <body>
    	<h1>Voici la liste de tous nos livres.</h1>
    <?php include "bdd.php"?>
            <?php
            $reponse = $bdd->query('SELECT * FROM livre LEFT JOIN editeur ON livre.editeur = editeur.id LEFT JOIN auteur ON isbn = idLivre LEFT JOIN personne ON idPersonne = personne.id LEFT JOIN genre ON livre.genre = genre.id ORDER BY titre ASC');

        while ($donnees = $reponse->fetch()) { ?>
                    <section class="livres">
                        <a href="details_livres.php?titre=<?= ($donnees['titre']) ?>">
            <?php
            	echo '<strong=livres>'.$donnees["titre"]. '</strong>';
    			echo '<p=livres>Ecrit par ' . $donnees["prenom"] . ' - ' . $donnees["nom"] . '</p>';
    			echo '<p=livres>Genre : '.$donnees["libelle"].'</p>';
    			echo '<p=livres>Editeur : '.$donnees["editeur"].'</p>';
            }
            ?>
                    </section>

    </body>
</html>
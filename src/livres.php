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
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php" ?>
	<h1>Voici la liste de tous nos livres.</h1>
<?php include "bdd.php"?>
        <?php
        $reponse = $bdd->query('SELECT * FROM livre LEFT JOIN editeur ON livre.editeur = editeur.id LEFT JOIN auteur ON isbn = idLivre LEFT JOIN personne ON idPersonne = personne.id LEFT JOIN genre ON livre.genre = genre.id ORDER BY titre ASC');

    while ($donnees = $reponse->fetch()) { ?>
            <div class="livres">
            <section>
                <a href="details_livres.php?titre=<?= ($donnees['titre']) ?>">
        <?php
        	echo '<strong>'.$donnees["titre"]. '</strong>';
			echo '<p>Ecrit par ' . $donnees["prenom"] . ' - ' . $donnees["nom"] . '</p>';
			echo '<p>Genre : '.$donnees["libelle"].'</p>';
			echo '<p>Editeur : '.$donnees["editeur"].'</p>';
        }
    ?>
            </section>
</body>
</html>
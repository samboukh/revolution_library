<?php
session_start();
ini_set('display_errors', 'on');
$template='livres';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Revolution Library | Livres</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/styleglobal.css">
        <script src="https://kit.fontawesome.com/f2574f15cd.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include "header.php" ?>
    	<h1 class="h1Books">Trouvez votre bonheur dans notre large choix !</h1>
    <?php include "bdd.php"?>
            <?php
            $reponse = $bdd->query('SELECT DISTINCT * FROM livre LEFT JOIN editeur ON livre.editeur = editeur.id LEFT JOIN auteur ON isbn = idLivre LEFT JOIN personne ON idPersonne = personne.id LEFT JOIN genre ON livre.genre = genre.id ORDER BY titre ASC');

        while ($donnees = $reponse->fetch()) { ?>
                    <section class="livres">
                        <a href="details_livres.php?titre=<?= ($donnees['titre']) ?>">
            <?php
            	echo '<div class=livre><strong>'.$donnees["titre"]. '</strong>';
    			echo '<p>Ecrit par ' . $donnees["prenom"] . ' - ' . $donnees["nom"] . '</p>';
            ?>
                <img class="imag" src="./img/<?php echo $donnees['isbn']; ?>.jpg" alt="img" style="width : 200px; margin-left : 20px; ">
            <?php
    			echo '<p>Genre : '.$donnees["libelle"].'</p>';
    			echo '<p>Editeur : '.$donnees["editeur"].'</p> </div>';
            }
            ?>
                    </section>
    </body>
</html>
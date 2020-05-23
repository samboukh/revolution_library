<?php include "header.php" ?>

<?php include "bdd.php"?>
<?php header("refresh:5;url=livres.php");?>
<?php
    $req = $bdd->query('DELETE FROM livre WHERE isbn="?"; DELETE FROM auteur WHERE idLivre=isbn;');
    echo 'Vous avez correctement supprimé le livre du site.';
    ?>
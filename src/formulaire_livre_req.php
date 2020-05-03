<?php
session_start();

include "bdd.php";
$req = $bdd->prepare('INSERT INTO livre(isbn, titre, editeur, annee, genre, langue, nbpages) VALUES (?, ?, ?, ?, ?, ?, ?)');
$req->execute(array(($_POST['isbn']), ($_POST['titre']), ($_POST['editeur']), ($_POST['annee']), ($_POST['genre']), ($_POST['langue']), ($_POST['nbpages'])));
header('Location: merci.php');
?>
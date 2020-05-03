<?php 
session_start();
include "bdd.php"?>
<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$req = $bdd->prepare('INSERT INTO personne (nom, prenom) VALUES(?, ?)');
$req->execute(array($nom, $prenom));

header('Location: merci.php');
?>
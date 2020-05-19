<?php 
session_start();

include "bdd.php";
$req = $bdd->prepare('INSERT INTO membre (nom, prenom, pseudo, email, mdp) VALUES (?, ?, ?, ?, ?)');
$req->execute(array(($_POST['nom']), ($_POST['prenom']), ($_POST['pseudo']), ($_POST['email']), ($_POST['mdp'])));
header('Location: connexion.php');
?>
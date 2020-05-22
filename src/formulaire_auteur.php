<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleglobal.css">
	<title>Ajoutez un auteur</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "header.php" ?>
	<h1>Faites nous découvrir un auteur</h1>
<?php include "bdd.php"?>
<form action="formulaire_auteur_req.php" onsubmit="return verifAuteur()" method="POST">
	<label for="nom">Nom</label>:<input  class="input" type="text" name="nom"/><br><br>
	<label for="prenom">Prénom</label>:<input  class="input" type="text" name="prenom"/><br><br>
	<input type="submit" value="Valider"/>
</form>
</body>
</html>
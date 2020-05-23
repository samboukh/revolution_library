<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Espace Administration</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/homecss.css">
		<script src="https://kit.fontawesome.com/f2574f15cd.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="logo_header_wrap">
				<a href="index.php"><img class="logo_header" src="./img/logo2.png"></a> 
				</div>
			<ol>
				
				<li><a href="index.php">Accueil</a></li>
				<li><a href="modifier.php">Modifier</a></li>
				<li><a href="supprimer.php">Supprimer</a></li>
				<li><a href="reserver.php">Réserver</a></li>
				<li><a href="formulaire_livre.php">Formulaire d'ajout</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>              
			</ol>
		</header>
	</body>
</html>
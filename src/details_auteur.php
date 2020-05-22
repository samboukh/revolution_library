<?php
session_start();
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Détails des auteurs</title>
			<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styleglobal.css">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "header.php" ?>
	<?php include "bdd.php"?>
		<?php
	$id= $_GET['id'];

	$req = $bdd->query('SELECT titre, nom, prenom, id FROM livre  JOIN auteur ON idLivre = isbn JOIN personne ON idPersonne = personne.id WHERE idPersonne LIKE "'.$id.'"');
	echo '<h1 style="text-align:center;">Détail des livres de votre auteur <strong style="text-decoration: underline;"></h1>';
while ($d = $req->fetch()){
	?>
	<div class="detail">
		<section class="details_auteur">
			<?php
				echo '<p class="detail">';
				echo '<strong><u>Nom</u></strong> : '.$d["nom"]. '<br>';
				echo '<strong><u>Prénom</u></strong> : '.$d["prenom"]. '<br>'; 
				echo '<strong><u>Titre</u></strong> : '.$d["titre"]. '<br>';
				?>
			</section>
		</div>

	<?php
	}

?>
</body>
</html>
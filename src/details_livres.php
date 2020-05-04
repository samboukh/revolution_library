<?php
session_start();
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Détails des livres</title>
			<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styleglobal.css">
</head>
<body>
	<h2>Détails du livre</h2>
	<?php include "bdd.php"?>
		<?php
	$titre = $_GET['titre']; //Protection contre la saisie utilisateur et récupération de la variable titre

	$req = $bdd->query('SELECT * FROM livre LEFT JOIN genre ON livre.genre = genre.id LEFT JOIN editeur ON editeur.id = livre.editeur LEFT JOIN langue ON langue.id = livre.langue WHERE titre LIKE "'.$titre.'%"');
while ($d = $req->fetch()){
	echo '<h1 style="text-align:center;">Détail du livre <strong style="text-decoration: underline;">'.$d["titre"].'</strong></h1>';
	?>
	<div class="detail">
		<section class="details_Livre">
			<?php
				echo '<p class="det">';
				echo '<strong><u>Editeur</u></strong> : '.$d["editeur"]. '<br>'; 
				echo '<strong><u>Nombre de page</u></strong> : '.$d["nbpages"]. ' pages <br>'; 
				echo '<strong><u>Genre</u></strong> : '.$d["libelle"]. '<br>'; 
				echo '<strong><u>Langue</u></strong> : '.$d["langue"]. '<br>'; 
				echo '<strong><u>Date de sortie</u></strong> : '.$d["annee"]. '<br>'; 
				echo '<strong><u>ISBN</u></strong> : '.$d["isbn"]. '<br>';
				?>
						<a class="button_RON" href="panier_tmp.php?isbn=<?= ($d['isbn'])?>">Réserver</a>
			</section>
		</div>

	<?php
	}

?>
</body>
</html>
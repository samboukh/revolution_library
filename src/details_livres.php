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
	<h1>Détails du livre</h1>
	<?php include "bdd.php"?>
		<?php
	$titre = $_GET['titre'];

	$req = $bdd->query('SELECT * FROM livre LEFT JOIN genre ON livre.genre = genre.id LEFT JOIN editeur ON editeur.id = livre.editeur LEFT JOIN langue ON langue.id = livre.langue WHERE titre LIKE "'.$titre.'%"');
while ($d = $req->fetch()){
	echo '<h2 style="text-align:center;">Détail du livre <strong style="text-decoration: underline;">'.$d["titre"].'</strong></h2>';
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
					<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "membre" || !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "admin"){
                    ?>
						<a class="button_RON" href="panier.php?isbn=<?= ($d['isbn'])?>">Réserver</a>
					<?php } ?>
						<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "admin" ){
                    ?>
						<a class="bouton" href="modifier.php?isbn=<?= ($d['isbn'])?>">Modifier</a>
						<a class="bouton" href="supprimer.php?isbn=<?= ($d['isbn'])?>">Supprimer</a>
					<?php } ?>
			</section>
		</div>

	<?php
	}

?>
</body>
</html>
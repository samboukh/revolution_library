<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'ajout d'un livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleglobal.css">
</head>
<body>
    <?php include "header.php" ?>

		<h1>Faites nous découvrir un livre!</h1>
<?php include "bdd.php"?>

        <?php $editeur = $bdd->query('SELECT * FROM editeur');?>
        <?php $genre = $bdd->query('SELECT * FROM genre');?>
        <?php $langue = $bdd->query('SELECT * FROM langue');?>

<form action="formulaire_livre_req.php" onsubmit="return veriflivre()" method="POST">
    <label for="isbn">ISBN</label>:<input  class="input" type="text" name="isbn"/><br><br>
    <label for="titre">Titre</label>:<input  class="input"type="text" name="titre"/><br><br>
    <label for="editeur">Editeur</label>:
        <select name="editeur">
         	<option value="">
            	<?php foreach($editeur as $e):?>
            <option value="<?= $e['id']?>"><?= $e['libelle']?>
            	<?php endforeach ?>
        </select><br><br>
    <label for="annee">Année</label>:<input  class="input"type="number" name="annee"/><br><br>
    <label for="genre">Genre</label>:
        <select name="genre">
        	<option value="">
            	<?php foreach($genre as $g):?>
            <option value="<?= $g['id']?>"><?= $g['libelle'] ?>
            	<?php endforeach ?>
        </select><br><br>
    <label for="langue">Langue</label>: 
        <select name="langue">
         	<option value="">
            	<?php foreach($langue as $l):?>
            <option value="<?= $l['id']?>"><?= $l['libelle'] ?>
            	<?php endforeach ?>
        </select><br><br>
    <label for="nbpages">Nombre de pages</label>:<input class="input" type="text" name="nbpages"/><br><br>
	<input type="submit" value="Valider"/>
</form>
<form action="formulaire_auteur.php" method="POST">
<br><br><input type="submit" name="ajoute" value="Ajoutez un auteur">
</form>
</body>
</html>
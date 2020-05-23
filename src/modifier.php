<center>
<?php
// Connexion à MySQL
$bdd=new PDO('mysql:host=localhost;dbname=bibliothèque;charset=utf8', 'root', '');
if(isset($_POST['titre']) AND isset($_POST['isbn']) AND isset($_POST['editeur']) AND isset($_POST['genre'])AND isset($_POST['annee'])AND isset($_POST['langue'])AND isset($_POST['nbpages'])){ 
    $titre=$_POST['titre'];
    $isbn=$_POST['isbn'];
    $editeur = $_POST['editeur'];
    $genre = $_POST['genre'];
    $annee = $_POST['annee'];
    $langue = $_POST['langue'];
    $nbpages = $_POST['nbpages'];

$sql=$bdd->prepare("UPDATE `livre` SET `titre`=?,`editeur`=?,`annee`=?,`genre`=?,`langue`=?,`nbpages`=? WHERE isbn=?");
$sql->execute(array($_POST['titre'] , $_POST['isbn'] ,$_POST['editeur'] ,$_POST['genre'] , $_POST['annee'] ,$_POST['langue'] ,$_POST['nbpages'] ));
}
?>
<form method="POST">
<input type="text" name="isbn" placeholder="isbn Livre à changer"><br>
<input type="text" name="titre" placeholder="Titre"><br>
<input type="number" name="editeur" placeholder="id Editeur"min=1><br>
<input type="number" name="annee" placeholder="Annee"><br>
<input type="number" name="genre" placeholder="id Genre"min=1><br>
<input type="number" name="langue" placeholder="id Langue"min=1><br>
<input type="number" name="nbpages" placeholder="Nb pages" min=5><br>
<input type="submit" value="valider">
</form>
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
<?php
$option_livre="SELECT isbn,titre FROM `livre`";
try{
    $stmt_livre=$bdd->prepare($option_livre);
    $stmt_livre->execute();
    $results_livre=$stmt_livre->fetchAll();
}
catch(Exception $ex)
{
    echo($ex->getMessage());
}
?>
<label for="titre" name='titre'>Titre présent</label><br>
    <select name="titre" >
    <option>Titre Enregistré</option>
    <?php foreach($results_livre as $output_livre){?>
    <option value="<?php echo $output_livre["isbn"];?>"><?php echo $output_livre["isbn"].".".$output_livre["titre"];?></optiton>
    <?php } ?>
    </select></br>
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
<?php
$option_edi="SELECT * FROM `editeur`";
try{
    $stmt_edi=$bdd->prepare($option_edi);
    $stmt_edi->execute();
    $results_edi=$stmt_edi->fetchAll();
}
catch(Exception $ex)
{
    echo($ex->getMessage());
}
?>
<label for="editeur" name='editeur'>Editeur déjà présent</label><br>
    <select name="editeur" >
    <option>Editeur Enregistré</option>
    <?php foreach($results_edi as $output_edi){?>
    <option value="<?php echo $output_edi["id"];?>"><?php echo 'Id:'.$output_edi["id"].".".$output_edi["libelle"];?></optiton>
    <?php } ?>
    </select></br>
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
<?php
$option_genre="SELECT * FROM `genre` order by id asc";
try{
    $stmt_genre=$bdd->prepare($option_genre);
    $stmt_genre->execute();
    $results_genre=$stmt_genre->fetchAll();
}
catch(Exception $ex)
{
    echo($ex->getMessage());
}
?>
<label for="genre" name='genre'>Genre déjà présent</label><br>
    <select name="genre" >
    <option>Genre Enregistré</option>
    <?php foreach($results_genre as $output_genre){?>
    <option value="<?php echo $output_genre["id"];?>"><?php echo 'Id:'.$output_genre["id"].".".$output_genre["libelle"];?></optiton>
    <?php } ?>
    </select></br>
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
<?php
$option_langue="SELECT * FROM `langue`";
try{
    $stmt_langue=$bdd->prepare($option_langue);
    $stmt_langue->execute();
    $results_langue=$stmt_langue->fetchAll();
}
catch(Exception $ex)
{
    echo($ex->getMessage());
}
?>
<label for="langue" name='langue'>Langue déjà présente</label><br>
    <select name="langue" >
    <option>Langue Enregistré</option>
    <?php foreach($results_langue as $output_langue){?>
    <option value="<?php echo $output_langue["id"];?>"><?php echo 'Id:'.$output_langue["id"].".".$output_langue["libelle"];?></optiton>
    <?php } ?>
    </select><br>
    <center>
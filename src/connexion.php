<?php session_start();
    if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    include "bdd.php";
    $req = $bdd->query('SELECT * FROM membre WHERE pseudo = "'.$pseudo.'"');
    $req = $req -> fetch();
    if($mdp != $req['mdp']){ //Si le mdp ne correspond pas
     echo $pseudo; 
    }else if($pseudo != $req['pseudo']){ //Si le pseudo n'est pas reconnu dans la base de donnée
     echo $mdp;   
    }else{
        $_SESSION['connexion'] = $req['session'];
        header('Location:index.php');
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion/Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleglobal.css">
</head>
<body>
<form action="connexion.php" method="post">
    	<label>Pseudo:</label><p><input type="text" name="pseudo"/></p>
		<label>Mot de passe:</label><p><input type="text" name="mdp"/></p>
		<input type="submit" value="Connexion"/>
</form>
<form action="inscription.php" method="POST">
<br><br><input type="submit" name="inscription" value="Inscription">
</form>
</body>
</html>
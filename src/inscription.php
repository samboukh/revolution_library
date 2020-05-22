<!DOCTYPE html>
<html>
<head>
	<title>Connexion/Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleglobal.css">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<form action="inscription_req.php" method="post">
		<label>Nom</label><p><input type="text" name="nom"/></p>
		<label>Prénom</label><p><input type="text" name="prenom"/></p>
		<label>Pseudo</label><p><input type="text" name="pseudo"/></p>
		<label>Email</label><p><input type="text" name="email"/></p>
		<label>Mot de passe</label><p><input type="text" name="mdp"/></p>
		<input type="submit" value="Inscription"/>
</body>
</html>
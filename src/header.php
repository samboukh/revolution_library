<head> 
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/styleglobal.css">
    <script src="https://kit.fontawesome.com/f2574f15cd.js" crossorigin="anonymous"></script>
</head>
		<header>
			<ol>
				<div class="logoHeaderWrap">
				<li><a href="index.php"><img class="logo_header" src="./img/logo2.png"></a></li>
				</div>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="livres.php">Livres</a></li>
				<li><a href="auteur.php">Auteurs</a></li>
				<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "membre" || !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "admin"){
                    ?>
				<li><a href="formulaire_livre.php">Formulaire d'ajout</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
				<?php }else{
                        ?>
                        <li><a href="connexion.php" title="connexion">Connexion</a></li>
                        <?php
                        }
                     ?>
				<li><a href="contact.phtml">Contactez-nous</a></li>
			</ol>
		</header>
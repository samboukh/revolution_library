<head> 
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/styleglobal.css">
    <script src="https://kit.fontawesome.com/f2574f15cd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
		<header>
			<div class="logo_header_wrap">
				<a href="index.php"><img class="logo_header" src="./img/logo2.png"></a> 
				</div>
			<ol>
				
				<li><a href="index.php">Accueil</a></li>
				<li><a href="livres.php">Livres</a></li>
				<li><a href="auteur.php">Auteurs</a></li>
				<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "membre" || !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "admin"){
                    ?>
				<li><a href="deconnexion.php">Déconnexion</a></li>
				<?php }else{
                        ?>
                        <li><a href="connexion.php" title="connexion">Connexion</a></li>
                        <?php
                        }
                     ?>
				<li><a href="contact.phtml">Contactez-nous</a></li>
				<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "admin" ){
                    ?>
				<li><a href="admin.php">Administration</a></li>
			<?php } ?>
			<?php
                    if( !empty($_SESSION['connexion']) && $_SESSION['connexion'] == "membre" ){
                    ?>
				<li><a href="membre.php">Membre</a></li>
			<?php } ?>
			</ol>
		</header>
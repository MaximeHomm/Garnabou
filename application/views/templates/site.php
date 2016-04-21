<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" media="screen" type="text/css" title="style" href="css/style.css" />
		<meta charset="utf-8">
	</head>
	<body>
	<header>

			<img src="templates/images/logo.jpg" alt="logo de gsb" >
		
			
		<nav>
				<ul id="menuList">
					<li>
						Visiteur :<?php echo $this->session->userdata('prenom')."  ".$this->session->userdata('nom');  ?>
					</li>
					
					<li class="smenu"><?php echo anchor('connecte/', 'Accueil', 'title="Page d\'accueil"'); ?>
					</li>
					<li class="smenu"><?php echo anchor('connecte/creationCR', 'Creation compte rendu', 'title="création des comptes rendu"'); ?>
					</li>
					<li class="smenu"><?php echo anchor('connecte/affichageCR', 'Affichage des comptes rendus', 'title="Affichage des comptes rendu"'); ?>
					</li>
					<li class="smenu"><?php echo anchor('connecte/deconnecter', 'Se déconnecter', 'title="Déconnexion"'); ?>
					</li>
				</ul>
		</nav>
	</header>
	
	
	

	<?php echo $body; ?>
	
	<footer>
	
		<!--  TEXTE DE PIED DE PAGE -->
		<p> Cette page a été réalisé par des professionnels, si vous avez moins de moins de 18 ans, ne tentez en aucun cas de reproduire ceci chez vous ! </p>
		<p> Copyright - Garnabou@2016 <p>
		<p> Tous droits sortis de notre betise<p>
	</footer>

	</body>
</html>
		
	



<?php 
	$path = base_url();
?>

<!-- PAGE TERMINE -->

<!--  CONTENU DE LA PAGE -->

	<!-- TEXTE AVANT FORMULAIRE -->
		<h2>Bienvenue sur GSB Services Compte-Rendu !</h2>
		<p> Veuillez vous identifier afin d'accéder au service. </p>
		
	
	<!--  FORUMULAIRE DE CONNEXION -->
	
		<form action="<?php echo $path.'controller/connecter';?>" method="post">
			login: <input type="text" name="login" value="" />
			Mot de Passe: <input type="password" name="mdp" value="" />
			<input type="submit" name="connexion" value="Connexion" />
		</form>



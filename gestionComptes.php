<?php
session_start();
require('config.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- importe le fichier de style -->
	<link rel="stylesheet" href="style.css" />

	<title>Gestion des comptes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div id="bandeau_bleu">
		<span>Application QCM </span>
		<span id="positionUtilisateur">Utilisateur : <?php echo $prenom, ' ', $nom ?></span>
		<span id="positionType">Type : <?php echo $type ?></span>
	</div>
	<div id="bandeau_vert">
		<span><a id="positionAffectationQCM" href="affectationQCM.php">Affectation d'un QCM </a>.</span>
		<span><a id="positionResultats" href="resultats.php">Résultats </a></span>
		<span><a id="positionGestionQCM" href="gestionQCM.php">Gestion des QCM </a></span>
		<span><a id="positionGestionComptes" href="gestionComptes.php">Gestion des comptes </a></span>
		<span><a id="positionGestionGroupes" href="gestionGroupes.php">Gestion des groupes </a></span>
		<span><a id="positionDeconnexion" href="deconnexion.php">Se déconnecter </a></span>
	</div>
	<div>
		<h3 style="color: blue"><center> Gestion des comptes</center></h3>
	</div>
	<div>
		<center>
			<table border="1">
				<thead>
					<tr>
						<th> Identifiant </th>
						<th> Nom </th>
						<th> Prénom </th>
						<th> Login </th>
						<th> Mot de Passe </th>
						<th> Type </th>
						<th> Modification </th>
						<th> Suppression </th>
					</tr>
					<?php

					$sqlCompte = mysqli_query($connect, "SELECT utilisateurs.idUtilisateur, enseignant.idUtilisateur AS idEns, nom, prenom, login, motDePasse FROM utilisateurs, enseignant ");

					while($data=mysqli_fetch_array($sqlCompte)) 
					{
						$idUtilisateur = $data['idUtilisateur'];
						$Type = $data['idEns'];
						$nom = $data ['nom'];
					    $prenom = $data ['prenom'];
					    $login = $data ['login'];
					    $motDePasse = $data ['motDePasse'];

						if ($idUtilisateur == $Type) 
						{
							$Type = 'Formateur';
						}
						else
						{
							$Type = 'Elève';
						}

						echo ('<tr><td>'.$idUtilisateur.'</td><td>'.$nom.'</td><td>'.$prenom.'</td><td>'.$login.'</td><td>'.$motDePasse.'</td><td>'.$Type.'</td><td><input type="submit" name="modifierCompte" value="modifier"></td><td><input type="submit" name="supprimerCompte" value="supprimer"></td></tr>');
					}
					?>
				</thead>
			</table>
			<br>
			<input type="submit" id='submit' name='Ajoututilisateur' value='Ajouter un utilisateur'></center>
		</center>
	</br>
</div>
</body>
</html>
<?php
session_start();
require('config.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- importe le fichier de style -->
	<link rel="stylesheet" href="style.css" />

	<title>Interface Formateur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div id="bandeau_bleu">
		<span>Application QCM</span>
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
		<h3 style="color: blue"><center> Résultats par élève</center></h3>
	</div>
	<div>
		<center>
			<table border="1">
				<thead>
					<tr>
						<th> Identifiant </th>
						<th> Nom </th>
						<th> Prénom </th>
						<th> Moyenne </th>
						<th> Disponnibles </th>
						<th> Réalisés </th>
					</tr>
					<?php

					$sqlUsers = mysqli_query($connect, "SELECT utilisateurs.idUtilisateur, enseignant.idUtilisateur AS 'idEns', nom, prenom FROM utilisateurs, enseignant ");
					$sqlResultat = mysqli_query($connect, "SELECT eleve.idResultat, resultat.idResultat AS 'idResult', MoyenneQCM FROM eleve, resultat ");

					while($data=mysqli_fetch_array($sqlUsers)) 
					{
						$nom = $data ['nom'];
						$prenom = $data ['prenom'];
						$idUtilisateur = $data['idUtilisateur'];
						$Type = $data['idEns'];
						if ($idUtilisateur == $Type) 
						{
						}
						else
						{
							echo ('<tr><td>'.$idUtilisateur.'</td><td>'.$nom.'</td><td>'.$prenom.'</td></tr>');
						}
					}
					?>
				</thead>
			</table>
		</body>
		</html>


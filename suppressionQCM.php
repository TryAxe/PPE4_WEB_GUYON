<?php
session_start();
require('config.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- importe le fichier de style -->
	<link rel="stylesheet" href="style.css" />

	<title>Supprimer un QCM</title>
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
		<h3 style="color: blue"><center> Supprimer un QCM</center></h3>
	</div>
	<div>
		<center>
			<div>
				<table border="1">
					<thead>
						<tr>
							<th>Identifiant </th>
							<th>Thème </th>
							<th>Libellé </th>
							<th>Auteur </th>
							<th>Suppression </th>
						</tr>
					</thead>
					<tbody>	
						<?php

						$sqlSup = mysqli_query($connect, "SELECT idQCM, nom, prenom, Description, LibelleQCM FROM utilisateurs, enseignant, qcm, theme WHERE utilisateurs.idUtilisateur = enseignant.idUtilisateur AND enseignant.idAuteur = qcm.idAuteur AND theme.IdTheme=qcm.IdTheme");

						while($data=mysqli_fetch_array($sqlSup)) 
						{
							$nom = $data['nom'];
							$prenom = $data['prenom'];
							$idQCM = $data['idQCM'];
							$libelle = $data['LibelleQCM'];
							$theme = $data['Description'];

							echo ('<tr><td>'.$idQCM.'</td><td>'.$theme.'</td><td>'.$libelle.'</td><td>'.$nom.' '.$prenom.'</td><td><input type="checkbox" name="supprimer[]" value="'.$idQCM.'"></td></tr>');
						}
						?>
					</tbody>
				</table>
			</br>
			<form method="POST">
				<input type="submit" name="supprimerQCM" value="Supprimer">
			</form>
			<?php 

			if (isset($_POST["supprimer"])) 
			{
				foreach ($_POST["supprimer"] as $check) 
				{
					if (!isset($checkoptions)) 
					{
						$checkoptions = $check;
					}
					else
					{
						$checkoptions .= ",".$check; // si plusieurs check alors cela donne 'id1, id3, id9' etc
					}
				}
				$reqsup = "DELETE * FROM qcm WHERE idQCM IN(".$checkoptions.")"; // suppression
			}

			?>
			</div>
		</center>
	</div>
</body>
</html>
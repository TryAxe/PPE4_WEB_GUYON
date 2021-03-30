<?php
session_start();
require('config.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- importe le fichier de style -->
	<link rel="stylesheet" href="style.css" />

	<title>Interface Elève</title>
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
		<span><a href="deconnexion.php">Se déconnecter</a></span>
	</div>
	<div>
		<h3 style="color: blue"><center> Tableau de bord</center></h3>
	</div>
	<div>
		<table border="1">
			<thead>
				<tr>
					<th>Identifiant </th>
					<th>Thème </th>
					<th>Libellé </th>
					<th>Affecté le </th>
					<th>Note </th>
					<th>Effectué le </th>
					<th>Synthèse </th>
				</tr>
			</thead>
			<tbody>	
			</tbody>
		</table>
	</div>

</body>
</html>
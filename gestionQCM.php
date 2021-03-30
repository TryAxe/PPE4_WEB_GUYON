<?php
session_start();
require('config.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- importe le fichier de style -->
	<link rel="stylesheet" href="style.css" />

	<title>Gestion des QCM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div id="bandeau_bleu">
		<span>Gestion des QCM </span>
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
		<h3 style="color: blue"><center> Gestion des QCM</center></h3>
	</div>
	<center>
	</br></br></br></br>
<div>
	<input type=button onclick=window.location.href='affichageQCM.php'; value='Afficher un QCM' style="position: absolute; ;left: 2%; font-weight: bold;"/>
	<span><IMG id="imagesGestionQCM1" SRC="checkList.jpg" ></IMG></span>
	<input type=button onclick=window.location.href='ajouterQCM.php'; value='Ajouter un QCM' style="position: absolute; ;left: 20%; font-weight: bold; color: red;"/>
	<span><IMG id="imagesGestionQCM2" SRC="caddie.jpg" ></IMG></span>
	<input type=button onclick=window.location.href='modifierQCM.php'; value='Modifier un QCM' style="position: absolute; ;left: 40%; font-weight: bold; color: red;"/>
	<span><IMG id="imagesGestionQCM3" SRC="crayon.png" ></IMG></span>
	<input type=button onclick=window.location.href='supprimerQCM.php'; value='Supprimer un QCM' style="position: absolute; ;left: 60%; font-weight: bold;"/>
	<span><IMG id="imagesGestionQCM4" SRC="corbeille.jpg" ></IMG></span>
</div>	
</center>
</body>
</html>
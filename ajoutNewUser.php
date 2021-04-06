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
		<h3 style="color: blue"><center> Ajout nouveau utilisateur</center></h3>
	</div>
	<div>
		<center>
			<form method="POST">

				<label><b>Nom</b></label>
				<input type="text" name="nomNewUser" class="form-control" style="width: 10%; position: relative;">

				<br><br>

				<label><b>Prénom</b></label>
				<input type="text" name="prenomNewUser" style="width: 10%; position: relative;">

				<br><br>

				<label><b>Login</b></label>
				<input type="text" name="loginNewUser" class="form-control" style="width: 10%">

				<br><br>

				<label><b>Mot de Passe</b></label>
				<input type="password" name="passwordNewUser" style="width: 10%; position: relative;">

				<br><br>

				<label><b>Type</b></label>
				<input type="number" name="typeNewUser" min="1" max="2" style="width: 3%;">
				
				<br>
				<font color="red">Type 1 = Enseignant, Type 2 = Elève</font>

				<br><br>

				<input type="submit" id='submit' name='formValiderAjoutUser' value='Valider'>
				<input type="submit" id='submit' name='formAnnulerAjoutUser' value='Retour'>
			</form>	
		</center>
	</br>
</div>
</body>
</html>
<?php 

if (isset($_POST['formValiderAjoutUser']))
{
	$nomNewUser = $_POST['nomNewUser'];
	$prenomNewUser = $_POST['prenomNewUser'];
	$loginNewUser = $_POST['loginNewUser'];
	$passwordNewUser = $_POST['passwordNewUser'];
	$TypeNewUser = $_POST['typeNewUser'];

	
	$sqlAddUser = mysqli_query($connect, "INSERT INTO utilisateurs (nom,prenom,login,motDePasse) VALUES ('$nomNewUser','$prenomNewUser','$loginNewUser','$passwordNewUser')");

	$sqlIdNewUser = mysqli_query($connect, "SELECT idUtilisateur FROM utilisateurs WHERE login = '" . $loginNewUser . "' LIMIT 1");
		while($row=mysqli_fetch_array($sqlIdNewUser)) // recupération de l'identifiant du nouveau utilisateur dans la table utilisateurs
		{
			$idNewUtilisateur = $row['idUtilisateur'];
		}

	if ($TypeNewUser == 2 ) // Ajout nouveau utilisateur dans la table "utilisateurs" et "eleve"
	{
		$sqlAddUser1 = mysqli_query($connect, "INSERT INTO eleve (idUtilisateur)  VALUES ($idNewUtilisateur)");
	}
	elseif ($TypeNewUser == 1 ) // Ajout nouveau utilisateur dans la table "utilisateurs" et "enseignant"
	{
		$sqlAddUser2 = mysqli_query($connect, "INSERT INTO enseignant (idUtilisateur)  VALUES ($idNewUtilisateur)");
	}
}
elseif (isset($_POST['formAnnulerAjoutUser'])) 
{
	header ("location: gestionComptes.php");
}
?>
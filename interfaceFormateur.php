<?php
session_start();
require('config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- importe le fichier de style -->
    <link rel="stylesheet" href="style.css"/>

    <title>Interface Formateur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div id="bandeau_bleu">
    <span>Application QCM</span>
    <span id="position1">Utilisateur : <?php echo $prenom, ' ', $nom ?></span>
    <span id="position2">Type : <?php echo $type ?></span>
</div>
<div id="bandeau_vert">
		<span><a href="affectationQcm.php">Affectation d'un QCM - </a>
		</span>
    <span><a href="resultats.php">Résultats - </a></span>
    <span><a href="gestionQcm.php">Gestion des QCM - </a></span>
    <span><a href="gestionComptes.php">Gestion des comptes - </a>
		</span>
    <span><a href="gestionGroupes.php">Gestion des groupes - </a>
		</span>
    <span><a href="deconnexion.php">Se déconnecter</a></span>
</div>
<div>
    <h3 style="color: blue">
        <div style="text-align: center;"> Bienvenue sur l'application QCM</div>
    </h3>
</div>
<div>
    <span><IMG id="image2" SRC="QCM.jpg"></span>
    <span><IMG id="image1" SRC="chronomètre.png"></span>
</div>

</body>
</html>
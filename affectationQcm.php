<?php
session_start();
require('config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- importe le fichier de style -->
    <link rel="stylesheet" href="style.css"/>

    <title>Affectation QCM</title>
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
        <center> Affectation d'un QCM</center>
    </h3>
</div>
<div>

</div>

</body>
</html>
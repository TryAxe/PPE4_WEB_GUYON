<?php
session_start();
require('config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- importe le fichier de style -->
    <link rel="stylesheet" href="style.css"/>

    <title>Interface Elève</title>
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
    <span><a href="deconnexion.php">Se déconnecter</a></span>
</div>
<div>
    <h3 style="color: blue">
        <div style="text-align: center;"> Tablau de bord</div>
    </h3>
</div>
<div>

</div>

</body>
</html>

<?php
session_start();
require('config.php');
?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- importe le fichier de style -->
        <link rel="stylesheet" href="style.css"/>

        <title>Bienvenue</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
    <div id="container">
        <!-- zone de connexion -->
        <form method="POST">
            <h1 style="color: blue;">Bonjour, <?php echo $prenom; ?> cliquez sur le bouton <font
                        color="red">ENTRER </font>pour continuer sur l'application QCM</h1>
            <input href="interfaceEleve.php" type="submit" id='submit' name='connexionInterface' value='ENTRER'>
        </form>
    </div>
    </body>
    </html>
<?php
if (isset($_POST['connexionInterface'])) {
    if ($idUtilisateur == $idUtilisateurEnseignant) {
        header("location: interfaceFormateur.php");
    } else {
        header("location: interfaceEleve.php");
    }

}

?>
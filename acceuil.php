<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <!-- importe le fichier de style -->
    <link rel="stylesheet" href="style.css"/>
    <title> Acceuil </title>
</head>

<body>
<div id="container">
    <!-- zone de connexion -->
    <form method="POST">
        <h3 style="color: blue;">Acceuil du site QCM :</h3>

        <label><b>Login</b></label>
        <input type="text" name="usernameConnect" class="form-control" required="required">

        <label><b>Mot de passe</b></label>
        <input type="password" name="passwordConnect">

        <input type="submit" id='submit' name='formConnexion' value='OK'>
        <h3>
            <center>
                <font color="red">Vous devez obligatoirement saisir le login et mot de passe pour entrer sur
                    l'application QCM</font>
            </center>
        </h3>
    </form>
</div>
</body>
</html>
<?php
if (isset($_POST['formConnexion'])) {
    session_start();
    $_SESSION['login'] = $_POST['usernameConnect'];
    $_SESSION['motDePasse'] = $_POST['passwordConnect'];

    $connect = mysqli_connect('127.0.0.1', 'root', '', 'PPE4_BD_GUYON');
    mysqli_set_charset($connect, "utf8");
    $sql = mysqli_query($connect, "SELECT * FROM utilisateurs WHERE login='" . $_SESSION['login'] . "' AND  motDePasse = '" . $_SESSION['motDePasse'] . "'");
    $count = mysqli_num_rows($sql);
    if ($count == 1) {
        header("location: bienvenue.php");
    }
}
?>
<?php
error_reporting(E_PARSE);
$connect = mysqli_connect('127.0.0.1', 'root', '', 'PPE4_BD_GUYON');
mysqli_set_charset($connect, "utf8");

$sql = mysqli_query($connect, "SELECT * FROM utilisateurs WHERE login='" . $_SESSION['login'] . "'");

while ($data = mysqli_fetch_array($sql)) // recupération de toute les infos de l'utilisateur
{
    $nom = $data ['nom'];
    $prenom = $data ['prenom'];
    $login = $data ['login'];
    $motDePasse = $data ['motDePasse'];

}

$sql2 = mysqli_query($connect, "SELECT idUtilisateur FROM utilisateurs WHERE login='" . $login . "' LIMIT 1");

while ($row = mysqli_fetch_array($sql2)) // recupération de l'identifiant de l'utilisateur dans la table Utilisateur
{
    $idUtilisateur = $row['idUtilisateur'];
}
$_SESSION['idUtilisateur'] = $idUtilisateur;

$sql3 = mysqli_query($connect, "SELECT idUtilisateur FROM enseignant WHERE idUtilisateur='" . $idUtilisateur . "' LIMIT 1");

while ($row = mysqli_fetch_array($sql3)) // recupération de l'identifiant de l'utilisateur dans la table Elève
{
    $idUtilisateurEnseignant = $row['idUtilisateur'];
}

$_SESSION['idUtilisateurEnseignant'] = $idUtilisateurEnseignant;

if ($idUtilisateur == $idUtilisateurEnseignant) {
    $type = 'Formateur';
} else {
    $type = 'Elève';
}
?>
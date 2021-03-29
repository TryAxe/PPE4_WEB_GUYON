<?php

$connect=mysqli_connect('127.0.0.1', 'root','','PPE4_BD_GUYON');
mysqli_set_charset($connect, "utf8");

$sqlInfo = mysqli_query($connect, "SELECT * FROM utilisateurs WHERE login='" . $_SESSION['login']."'");

while($data=mysqli_fetch_array($sqlInfo)) // recupération de toute les infos de l'utilisateur
{
    $nom = $data ['nom'];
    $prenom = $data ['prenom'];
    $login = $data ['login'];
    $motDePasse = $data ['motDePasse'];
    
}
$sqlIdUser=mysqli_query($connect,"SELECT idUtilisateur FROM utilisateurs WHERE login='".$login."' LIMIT 1");

while($row=mysqli_fetch_array($sqlIdUser)) // recupération de l'identifiant de l'utilisateur dans la table utilisateurs
{
    $idUtilisateur = $row['idUtilisateur'];
}
$_SESSION['idUtilisateur']=$idUtilisateur;

$sqlIdEns=mysqli_query($connect,"SELECT idUtilisateur FROM enseignant WHERE idUtilisateur='".$idUtilisateur."' LIMIT 1");

while($row=mysqli_fetch_array($sqlIdEns)) // recupération de l'identifiant de l'utilisateur dans la table enseignant
{
    $idUtilisateurEnseignant = $row['idUtilisateur'];
}

$sqlIdEleve=mysqli_query($connect,"SELECT idUtilisateur FROM eleve WHERE idUtilisateur='".$idUtilisateur."' LIMIT 1");

while($row=mysqli_fetch_array($sqlIdEleve)) // recupération de l'identifiant de l'utilisateur dans la table eleve
{
    $idUtilisateurEleve = $row['idUtilisateur'];
}

if ($idUtilisateur == @$idUtilisateurEnseignant) 
    {
        $type = 'Formateur';
    }
elseif ($idUtilisateur == @$idUtilisateurEleve) 
    {
        $type = 'Elève';
    }
?>
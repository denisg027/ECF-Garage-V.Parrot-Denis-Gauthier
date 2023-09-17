<!-- Traitement de la déconnexion de l'utilisateur
     Redirection vers la page d'accueil après la déconnexion réussie -->

<?php
session_start();
if(!isset($_SESSION['users'])){
    header('location: login.php');
}
unset($_SESSION['users']);
header("location: index.php");

?>
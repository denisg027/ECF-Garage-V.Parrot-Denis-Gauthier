<!-- Page de profil de l'utilisateur une fois connecté -->

<?php
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

if(!isset($_SESSION['users'])){ 
    header('Location: index.php'); 
    exit; 
  }

$user = $_SESSION["users"];
?>

<div class="container">
<h1>Votre profil</h1>
<div> Prénom: <?php echo  $_SESSION["users"]['firstname'] ?></div>
<div> Nom: <?php echo $_SESSION["users"]["lastname"] ?></div>
<div> Votre email: <?php echo $_SESSION["users"]["email"] ?></div>

</div>


<?php
include './Assets/includes/footer.html';
?>
<?php

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["utilisateurs"])) {
    $firstname = $_SESSION["utilisateurs"]["firstname"];
    $lastname = $_SESSION["utilisateurs"]["lastname"];
    $loggedIn = true;
} else {
    $loggedIn = false;
}
?>

<!-- Barre de navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img
        src="./Assets/images/logo.png"
        alt="Garage Vincent Parrot - Toulouse"
        />
        <span class="site-name pull-left">Garage Vincent Parrot</span>
      </a>
    </div>
    <a id="link" href="#"><span id="burger"></span></a>
    
    
    <ul class="nav navbar-nav navbar-right">
        <!-- Afficher le nom et prénom de l'utilisateur s'il est connecté -->
        <?php if ($loggedIn) { ?>
          <li><a href="#"><?php echo $firstname . " " . $lastname; ?></a></li>
          <li><a href="logout.php">Déconnexion</a></li>
        <?php } else { ?>
          <li><a href="login.php">Connexion</a></li>
        <?php } ?>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="carte.php">Services</a></li>
        <li><a href="a-propos.php">Véhicules occasions</a></li>

      </ul>
    </div>
  </nav>
<?php
// vérification si une session n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["users"])) {
    $firstname = $_SESSION["users"]["firstname"];
    $lastname = $_SESSION["users"]["lastname"];
    $loggedIn = true;

    // Vérifier si l'utilisateur est un administrateur
    if ($_SESSION["users"]["role"] === "admin") {
        $isAdmin = true;
    } else {
        $isAdmin = false;
    }
} else {
    $loggedIn = false;
    $isAdmin = false;
}


?>


<!-- Barre de navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">
        <img
        src="../Assets/Images/logo-admin.png"
        alt="Garage V.Parrot console Admin"
        />
        <span class="site-name pull-left">Garage V.Parrot</span>
      </a>
    </div>
    <a id="link" href="#"><span id="burger"></span></a>
    
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="board.php">Accueil administration</a></li>
      <!-- Administrateur connecté -->
      <li><a href="#">Bienvenue, Administrateur</a></li>
      <li><a href="gestion-employee.php">Gestion des employés</a></li>
      <li><a href="gestion-services.php">Gestion des services</a></li>
<!-- Afficher le nom et prénom de l'administrateur s'il est connecté -->
<?php if (isset($_SESSION["users"])): ?>
      <!-- Utilisateur connecté -->
      <li>Bienvenue, <?php echo $_SESSION["users"]["firstname"]; ?></li>
      <li><a href="../logout.php">Se déconnecter</a></li>
    <?php elseif (isset($_SESSION["role"]) && $_SESSION["role"] === "admin"): ?>
      <li><a href="../logout.php">Se déconnecter</a></li>
    <?php else: ?>
      <!-- Utilisateur non connecté -->
      <li><a href="../login.php">Se connecter</a></li>
      
    <?php endif; ?>
      </ul>
    </div>
  </nav>
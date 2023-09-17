<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

$pdo = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

if ($pdo) {
  echo "Connexion réussie à la base de données";
} else {
  echo "Échec de la connexion à la base de données";
}


?>

<main id="main">
    
        <h1 class="booking">Réservez un rendez-vous en atelier</h1>
    
    <div class="container">
        <form action="process_reservation.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Réserver">
        </form>
    </div>
    <footer>
        
    </footer>



    </main>







<?php
include './Assets/includes/footer.html';
?>

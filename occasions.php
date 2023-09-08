<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';

// $pdo = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

// if ($pdo) {
//   echo "Connexion réussie à la base de données";
// } else {
//   echo "Échec de la connexion à la base de données";
// }


?>


<main id="main">

    <h1 class="cars">Nos véhicules d'occasion</h1>
    <div class="separateur"></div>
 
    <?php
    // Connexion à la base de données 
    $host = "localhost";
    $username = "VParrot";
    $password = "VtPt092023";
    $database = "garagevparrot";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Sélection des voitures à partir de la base de données
    $sql = "SELECT * FROM voitures";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Affiche les informations de chaque voiture
            echo "<div>";
            echo "<img src='" . $row['image_principale'] . "' alt='" . $row['marque'] . " " . $row['modele'] . "'>";
            echo "<h2>" . $row['marque'] . " " . $row['modele'] . "</h2>";
            echo "<p>Prix : " . $row['prix'] . " €</p>";
            echo "<p>Année : " . $row['annee'] . "</p>";
            echo "<p>Kilométrage : " . $row['kilometrage'] . " km</p>";
            echo "<a href='galerie.php?voiture_id=" . $row['id'] . "'>Voir la galerie</a>";
            echo "</div>";
        }
    } else {
        echo "Aucune voiture n'a été trouvée dans la base de données.";
    }

    // Ferme la connexion à la base de données
    $conn->close();
    ?>


</main>







<?php
include './Assets/includes/footer.html';
?>
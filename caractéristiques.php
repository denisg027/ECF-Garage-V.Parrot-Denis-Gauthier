<?php
session_start();
include './Assets/includes/navbar.php';
include './Assets/includes/head.html';
require './Espace-admin/database.php';

$db = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour interagir avec la BDD)

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Récupération de l'ID en Get des caractéristiques à afficher
    if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);

    
// Vérification si $id est un entier valide avant de l'utiliser dans une requête SQL
if (is_numeric($id)) {
    // Préparation de la requête SQL en utilisant une déclaration préparée pour éviter les injections SQL
    $query = "SELECT * FROM cars WHERE id = ?";
    $statement = $db->prepare($query);
    $statement->execute([$id]);

    // Récupération des données du véhicule spécifique
    $car = $statement->fetch(PDO::FETCH_ASSOC);

// Affiche les caractéristiques du véhicule ou gère le cas où l'ID n'existe pas
if ($car) {

?>

<main id="main" class="main">
    <a href="../vehicules.php" class="btn-retour">&lt; Retour</a>
    <h1 class="cars"><?php echo $car['brand']; ?> <?php echo $car['model']; ?></h1>
    <div class="separateur"></div>
    <div class="car-details-container">
        <div class="car-images">
            <img src="/Assets/Images/<?php echo $car['pictures']; ?>" alt="<?php echo $car['pictures']; ?>">
            <div class="image-slider">
                <!-- Slider mini photos du véhicule -->
                <img src="/Assets/Images/<?php echo $car['pictures1']; ?>" alt="<?php echo $car['pictures1']; ?>">
                <img src="/Assets/Images/<?php echo $car['pictures2']; ?>" alt="<?php echo $car['pictures2']; ?>">
                <img src="/Assets/Images/<?php echo $car['pictures3']; ?>" alt="<?php echo $car['pictures3']; ?>">
                <img src="/Assets/Images/<?php echo $car['pictures4']; ?>" alt="<?php echo $car['pictures4']; ?>">
                <img src="/Assets/Images/<?php echo $car['pictures5']; ?>" alt="<?php echo $car['pictures5']; ?>">
            </div>
        </div>
        <div class="car-specs">
            <h2>Caractéristiques</h2>
            <ul>
                
                <?php
                    // La fonction "Explose" divise la chaîne de caractères en un tableau
                    $features = explode(', ', $car['features']);
                    foreach ($features as $feature) {
                        echo "<li>$feature</li>";
                    }
                    ?>
                
            </ul>
        </div>
    </div>

    <div class="car-description-container">
        <div class="car-equipements">
            <h2>Equipements</h2>
              <div class="equipment-list">
            <ul>
                
                <?php
                    // La fonction "Explose" divise la chaîne de caractères en un tableau
                    $equipments = explode(', ', $car['equipments']);
                    foreach ($equipments as $equipment) {
                        echo "<li>$equipment</li>";
                    }
                    ?>
                
            </ul>
            </div>
        </div>
        <div class="car-options">
            <h2>Options</h2>
            <div class="equipment-list">
            <ul>
                
                <?php
                    // La fonction "Explose" divise la chaîne de caractères en un tableau
                if (!empty($car['options'])) {
                    $options = explode(', ', $car['options']);
                    foreach ($options as $option) {
                        echo "<li>$option</li>";
                    }
                    echo '</ul>';
            } else {
                echo "Aucune option sur un véhicule d'occasion";
        }
                    ?>
                
            </ul>
            </div>
        </div>
    </div>

    <?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // si le formulaire a été soumis, traitement des données ici
    $titre_annonce = $_POST['titre_annonce'];
    // Effectuez d'autres actions de traitement si nécessaire
} else {
    // Le formulaire n'a pas été soumis, affichez le formulaire ici
?>

    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <input type="hidden" name="reference_vehicule" value="<?php echo $car['reference']; ?>">
        <form action="traitement-formulaire.php" method="post">
        <!-- Champ de formulaire caché pour la référence du véhicule -->
            <div class="form-row">
                <div class="form-group left">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="form-group right">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group hleft">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group right">
                    <label for="telephone">Téléphone :</label>
                    <input type="tel" id="telephone" name="telephone">
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <?php
}
?>
</main>

<?php
    } else {
      echo "Aucun véhicule trouvé pour cet ID.";
    }
  } else {
    echo "ID invalide.";
  }
} else {
  echo "L'ID n'a pas été spécifié dans l'URL.";
}

Database::disconnect();
?>


<?php
include './Assets/includes/footer.html';
?>
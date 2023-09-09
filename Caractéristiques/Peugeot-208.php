<?php
session_start();
include '../Assets/includes/navbar.php';
include '../Assets/includes/head.html';
require '../Espace-admin/database.php';

$pdo = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

if ($pdo) {
    echo "Connexion réussie à la base de données";
} else {
    echo "Échec de la connexion à la base de données";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détails de la voiture d'occasion</title>
    <link rel="stylesheet" href="/Caractéristiques/style.css">
</head>

<body>
    <main id="main">
    <a href="../occasions.php" class="btn-retour">&lt; Retour</a>
        <h1 class="cars">Peugeot 208</h1>
        <div class="separateur"></div>
        <div class="car-details-container">
            <div class="car-images">
                <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot 208 allure voiture d'occasion">
                <div class="image-slider">
                    <!-- Slider mini photos du véhicule -->
                    <img src="/Assets/Images/Peugeot-208-allure-interieur.png" alt="Peugeot 208 allure voiture d'occasion">
                    <img src="/Assets/Images/Peugeot-208-allure-interieur1.png" alt="Peugeot 208 allure voiture d'occasion">
                    <img src="/Assets/Images/Peugeot-208-allure-interieur2.png" alt="Peugeot 208 allure voiture d'occasion">
                    <img src="/Assets/Images/Peugeot-208-allure-interieur3.png" alt="Peugeot 208 allure voiture d'occasion">
                    <img src="/Assets/Images/Peugeot-208-allure-interieur4.png" alt="Peugeot 208 allure voiture d'occasion">
                </div>
            </div>
            <div class="car-specs">
                <h2>Caractéristiques</h2>
                <ul>
                    <li>Marque : Peugeot</li>
                    <li>Modèle : 208</li>
                    <li>Catégorie : Berline</li>
                    <li>Référence : LCD 282</li>
                    <li>Puissance fiscale : 4 CV</li>
                    <li>Puissance din : 100 Ch</li>
                    <li>Année : 23/07/2018</li>
                    <li>Kilométrage : 60000 km</li>
                    <li>Première main : non</li>
                    <li>Carburant : Diesel</li>
                    <li>Boite de vitesse : Manuelle</li>
                </ul>
            </div>
        </div>
        <div class="car-description-container">
            <div class="car-equipements">
                <h2>Equipements</h2>
                <div class="equipment-list">
                    <ul>
                        <li class="equipment">
                            6 Airbags </li>
                        <li class="equipment">
                            ESP ABS </li>
                        <li class="equipment">
                            Feux automatiques </li>
                        <li class="equipment">
                            Ordinateur de bord </li>
                        <li class="equipment">
                            Régulateur, Limitateur de vitesse </li>
                        <li class="equipment">
                            Rétroviseurs électriques </li>
                        <li class="equipment">
                            Vitres électriques (4) </li>
                        <li class="equipment">
                            Volant cuir </li>
                        <li class="equipment">
                            Système de navigation </li>
                        <li class="equipment">
                            Taille écran navigation 7 pouces </li>
                        <li class="equipment">
                            Volant multi-fonction </li>
                        <li class="equipment">
                            6 haut-parleurs </li>
                        <li class="equipment">
                            Bluetooth inclut musique en streaming, connexion téléphone </li>
                    </ul>
                </div>
            </div>
            <div class="car-options">
                <h2>Options</h2>
                <div class="equipment-list">
                    <ul>
                        <li class="equipment">
                            Caméra de Recul </li>
                        <li class="equipment">
                            Alarme </li>
                        <li class="equipment">
                            Peinture métallisée </li>
                        <li class="equipment">
                            Peugeot Connect SOS : Assistance </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <h2>Contactez-nous</h2>
            <form action="traitement_formulaire.php" method="post">
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

    </main>
</body>

</html>


<?php
include '../Assets/includes/footer.html';
?>
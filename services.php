<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

$db = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)
try {
    // $db = new PDO("mysql:host=your_host;dbname=your_dbname", "your_username", "your_password");
    // Configuration de PDO pour générer des exceptions en cas d'erreur.
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


?>


<main id="main">
    <h1 class="services">Bienvenue au Garage Vincent Parrot : <br> Expert en Réparation Automobile</h1>
    <div class="container">
        <p class="services">
            Fort de ses 15 années d'expérience dans le domaine de la réparation automobile, le Garage Vincent Parrot est votre partenaire de confiance pour tous vos besoins en matière de véhicules.
            Nous sommes fiers de mettre notre expertise au service de votre tranquillité d'esprit, en vous offrant une gamme complète de services de haute qualité.</p>

        <h3>Nos Services Incluent :</h3>
        <?php
        // Requête SQL pour récupérer les services depuis la base de données.
        $query = "SELECT * FROM services";
        $result = $db->query($query);

        if ($result) {
            // Créer un tableau pour stocker les données des services.
            $services = array();

            // Boucler à travers les résultats de la requête.
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                // Ajouter chaque service sous forme d'objet dans le tableau $services.
                $services[] = $row;
            }
        }
        ?>

        <!-- Maintenant, vous pouvez utiliser les données récupérées pour afficher les services sur votre page. -->
        <ul class="services">
            <?php foreach ($services as $index => $service) { ?>
                <li class="service">
                    <?php if ($index % 2 === 0) : ?>
                        <div class="service_picture">
                            <img src="/Assets/Images/<?php echo $service['service_picture']; ?>" alt="<?php echo $service['service_name']; ?>">
                        </div>
                        <div class="service_description">
                            <h3><?php echo $service['service_name']; ?></h3>
                            <p><?php echo $service['service_description']; ?></p>
                        </div>
                    <?php else : ?>
                        <div class="service_description">
                            <h3><?php echo $service['service_name']; ?></h3>
                            <p><?php echo $service['service_description']; ?></p>
                        </div>
                        <div class="service_picture">
                            <img src="/Assets/Images/<?php echo $service['service_picture']; ?>" alt="<?php echo $service['service_name']; ?>">
                        </div>
                    <?php endif; ?>
                </li>
            <?php } ?>
        </ul>

        <h3 class="services">Chez le Garage Vincent Parrot, nous nous engageons à fournir un service fiable, efficace et transparent pour tous les propriétaires de véhicules. Votre satisfaction est notre priorité absolue. Faites confiance à notre expérience et à notre savoir-faire pour prendre soin de votre voiture. Contactez-nous dès aujourd'hui pour planifier un rendez-vous ou pour en savoir plus sur nos services exceptionnels. Nous sommes là pour vous aider à prendre la route en toute confiance.</h3>


        <div class="diapositive">
            <img class="image" src="/Assets//Images/Services.png" alt="services">
            <img class="image" src="/Assets//Images/Services1.png" alt="services1">
            <img class="image" src="/Assets//Images/Services2.png" alt="services2">
            <img class="image" src="/Assets//Images/Services3.png" alt="services3">
        </div>
    </div>




</main>

<?php
include './Assets/includes/footer.html';
?>
<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', 1);
ini_set('error_log', 'C:\wamp64\logs\php_error.log');

$db = Database::connect();

// Définissez des valeurs par défaut pour les filtres
$priceMin = 0;
$priceMax = 100000;
$mileageMin = 0;
$mileageMax = 200000;
$yearMin = 1980;
$yearMax = 2023;

if ($db) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les valeurs de filtre depuis le formulaire
        $priceMin = $_POST['priceRangeLeft'];
        $priceMax = $_POST['priceRangeRight'];
        $mileageMin = $_POST['mileageLeft'];
        $mileageMax = $_POST['mileageRight'];
        $yearMin = $_POST['yearLeft'];
        $yearMax = $_POST['yearRight'];
    }

    // Utilisez une requête SQL pour récupérer les véhicules filtrés
    $sql = "SELECT * FROM cars
            WHERE price BETWEEN :priceMin AND :priceMax
            AND mileage BETWEEN :mileageMin AND :mileageMax
            AND year_of_circulation BETWEEN :yearMin AND :yearMax";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':priceMin', $priceMin, PDO::PARAM_INT);
    $stmt->bindParam(':priceMax', $priceMax, PDO::PARAM_INT);
    $stmt->bindParam(':mileageMin', $mileageMin, PDO::PARAM_INT);
    $stmt->bindParam(':mileageMax', $mileageMax, PDO::PARAM_INT);
    $stmt->bindParam(':yearMin', $yearMin, PDO::PARAM_INT);
    $stmt->bindParam(':yearMax', $yearMax, PDO::PARAM_INT);
    $stmt->execute();

    // Récupérez les résultats et affichez-les directement dans la page
    echo "<div id='vehicleList'>";
    while ($vehicle = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Personnalisez l'affichage du véhicule ici
        echo "<div>";
        echo "Modèle: " . $vehicle['model'];
        // Ajoutez d'autres détails du véhicule selon vos besoins
        echo "</div>";
    }
    echo "</div>";
}
?>


<main id="main">
    <div id="vehicleList">
        <!-- Vos véhicules seront affichés ici -->
    </div>

    <h1 class="cars">Nos véhicules neufs et occasions</h1>
    <div class="separateur"></div>


    <button id="filterButton" class="filter-button">
        <img src="/Assets/Images/filtre.png" alt="Filtrer">
    </button>
    <div id="filterPanel" class="hidden">
        <h2>Filtres</h2>
        <form id="filterForm" action="vehicules.php" method="POST">
            <label for="priceRangeLeft">Fourchette de prix :</label>
            <input type="range" id="priceRangeLeft" name="priceRangeLeft" min="0" max="50000" step="1000" value="0">
            <label for="priceRangeRight"></label>
            <input type="range" id="priceRangeRight" name="priceRangeRight" min="50000" max="100000" step="1000" value="100000">
            <div class="leftValue">10000</div>
            <div class="rightValue">80000</div>
            <label for="mileageLeft">Nombre de kilomètres :</label>
            <input type="range" id="mileageLeft" name="mileageLeft" min="0" max="50000" step="1000" value="0">
            <label for="mileageRight"></label>
            <input type="range" id="mileageRight" name="mileageRight" min="50000" max="200000" step="1000" value="200000">
            <div class="leftValueKm">0</div>
            <div class="rightValueKm">100000</div>
            <label for="yearLeft">Année de mise en circulation :</label>
            <input type="range" id="yearLeft" name="year" min="1980" max="2000" step="1" value="0">
            <label for="yearRight"></label>
            <input type="range" id="yearRight" name="year" min="2000" max="2023" step="1" value="2023">
            <div class="leftValueYear">1980</div>
            <div class="rightValueYear">2023</div>

            <button class="filter" type="submit">Appliquer le filtre</button>
            <div class="reset resetContainer">Reset <span class="resetFilters resetIcon"></span></div>
        </form>
    </div>


    <div class="cards-section">
        <!-- Vehicle cards -->
        <!-- Exécution de la requête pour récupérer les véhicules dans la BDD -->
        <?php
        $query = "SELECT * FROM cars";
        $statement = $db->query($query);
        $cars = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="container">
            <?php foreach ($cars as $car) : ?>
                <div class="card">
                    <div class="img-container">
                        <img src="/Assets/Images/<?php echo $car['pictures']; ?>" alt="<?php echo $car['pictures']; ?>" class="cover-img">
                    </div>

                    <span class="price"><?php echo $car['price']; ?> €</span>
                    <div class="details">
                        <div class="features">
                            <span class="marques"><?php echo $car['brand']; ?></span>
                            <span class="modeles"><?php echo $car['model']; ?></span>
                            <div class="info-cat"><?php echo $car['category']; ?></div>
                        </div>
                        <div class="features">
                            <span class="year">Années :</span>
                            <span class="release"><?php echo $car['year_of_circulation']; ?></span>
                        </div>
                        <div class="features-list">
                            <span class="energy">Energie :</span>
                            <span class="fuel"><?php echo $car['fuel']; ?></span>
                            <span class="km"><?php echo $car['mileage']; ?> KM</span>
                        </div>
                    </div>
                    <button class="button">
                        <a href="/caractéristiques.php?id=<?php echo $car['id']; ?>">VOIR PLUS</a>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</main>

<?php
include './Assets/includes/footer.html';
?>
<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

$db = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

if ($db) {
    echo "Connexion réussie à la base de données";
} else {
    echo "Échec de la connexion à la base de données";
}


?>


<main id="main">


    <div id="vehicleList">
        <!-- Vos véhicules seront affichés ici -->
    </div>

    <h1 class="cars">Nos véhicules neufs et occasions</h1>
    <div class="separateur"></div>
    <button id="filterButton" class="filter-button">
        <img src="/Assets/Images//filtre.png" alt="Filtrer">
    </button>
    <div id="filterPanel" class="hidden">
        <h2>Filtres</h2>
        <form id="filterForm">
            <label for="priceRangeLeft">Fourchette de prix (gauche) :</label>
            <input type="range" id="priceRangeLeft" name="priceRangeLeft" min="0" max="50000" step="1000" value="0">

            <label for="priceRangeRight">Fourchette de prix (droite) :</label>
            <input type="range" id="priceRangeRight" name="priceRangeRight" min="50000" max="100000" step="1000" value="100000">


            <label for="mileage">Nombre de kilomètres :</label>
            <input type="number" id="mileage" name="mileage">

            <label for="year">Année de mise en circulation :</label>
            <input type="number" id="year" name="year">

            <button class="filter" type="submit">Appliquer</button>
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
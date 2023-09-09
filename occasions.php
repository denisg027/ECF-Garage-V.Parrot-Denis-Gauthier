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

  <h1 class="cars">Nos véhicules d'occasion</h1>
  <div class="separateur"></div>

  <div1 class="cards-section">
    <!-- Vehicle cards -->
    <div2 class="container">
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>
      <div class="card">
        <div class="img-container">
          <img src="/Assets/Images/Peugeot-208-allure.png" alt="Peugeot-208-allure.png" class="cover-img">
        </div>

        <span class="price">19990€</span>
        <div class="details">
          <div class="features">
            <span class="marques">Peugeot</span>
            <span class="modeles">208</span>
            <div class="info-cat">Occasion</div>
          </div>
          <div class="features">
            <span class="year">Années :</span>
            <span class="release">08/10/2018</span>
          </div>
          <div class="features-list">
            <span class="energy">Energie :</span>
            <span class="fuel">Diesel</span>
            <span class="km">80000 KM</span>
          </div>
        </div>
        <button class="button">
          <a href="/Caractéristiques/Peugeot-208.php">
            VOIR PLUS
          </a>
        </button>
      </div>

    </div2>
  </div1>

</main>







<?php
include './Assets/includes/footer.html';
?>
<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';


?>


<main id="main">
  <div class="container-fluid fill">
    <div class="picture">
      <div class="img-picture">
        <h1 class="text-center">
          Bienvenue chez Vincent Parrot <br> Votre Garagiste à votre service
        </h1>
      </div>
    </div>
  </div>

  <div id="home" class="template-row">
    <div class="container">
      <div class="row-accueil">
        <div class="col-md-12">
          <h2 class="text-center">
            <a href="./services.php"><span>Découvrez nos services : </span>Réparation, entretien, décalaminage, climatisation, pare-brise, nos véhicules neufs et d'occasions</a>
          </h2>

          <div class="separateur"></div>
          <!-- Carousel photos des plats les + appréciés -->
          <div class="row-accueil">
            <div class="col-md-12">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./Assets/Images/entretien.png" title="Equilibrage roue" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./Assets/Images/entretien1.png" title="Point de contrôle" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./Assets/Images/entretien2.png" title="Vidange" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./Assets/Images/réparation1.png" title="Carosserie réparation" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./Assets/Images/réparation2.png" title="Carosserie réparation" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./Assets/Images/réparation3.png" title="Carosserie réparation" class="d-block w-100" alt="..." />
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="separateur"></div>

              <!-- Bouton Appel à L'action -->

              <div class="button-wrapper">
                <a href="./vehicules.php" class="btn-reza">Véhicules occasions</a>
                <a href="./booking.php" class="btn-reza">RDV en Atelier</a>
              </div>

              <div class="separateur"></div>

            </div>
          </div>
          <?php
          $pdo = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

          if ($pdo) {
            echo "Connexion réussie à la base de données";
          } else {
            echo "Échec de la connexion à la base de données";
          }

          // Codage pour ajouter un témoignage depuis la page d'accueil
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $commentaire = $_POST['commentaire'];
            $note = $_POST['note'];

            // Vous pouvez ajouter une validation ici pour éviter les injections SQL

            // Insérer le témoignage dans la base de données
            $sql = "INSERT INTO temoignages (nom, commentaire, note) VALUES (:nom, :commentaire, :note)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':commentaire', $commentaire);
            $stmt->bindParam(':note', $note);
            $stmt->execute();
          }
          ?>
        <section id="temoignages">
        <h2>Témoignages de nos clients</h2>
        <!-- Affichez ici les témoignages approuvés depuis la base de données -->
    </section>

    <section id="ajouter-temoignage">
        <h2>Laissez-nous votre témoignage</h2>
        <form action="votre_script_php.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required><br>

            <label for="commentaire">Commentaire :</label>
            <textarea name="commentaire" required></textarea><br>

            <label for="note">Note :</label>
            <input type="number" name="note" min="1" max="5" required><br>

            <input type="submit" value="Envoyer">
        </form>
    </section>


        </div>
      </div>
    </div>
  </div>

</main>

<?php
include './Assets/includes/footer.html';
?>
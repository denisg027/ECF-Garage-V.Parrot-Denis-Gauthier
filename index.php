<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';



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
          Nos services : Réparation, entretien et véhicules d'occasion
        </h2>
        
        <div class="separateur"></div>
          <!-- Carousel photos des plats les + appréciés -->      
        <div class="row-accueil">
          <div class="col-md-12">
            <div
                    id="carouselExampleInterval"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/entretien.png"
                          title="Equilibrage roue"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/entretien1.png"
                          title="Point de contrôle"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/entretien2.png"
                          title="Vidange"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/réparation1.png"
                          title="Carosserie réparation"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/réparation2.png"
                          title="Carosserie réparation"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div><div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/Images/réparation3.png"
                          title="Carosserie réparation"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                    </div>
                    <button
                      class="carousel-control-prev"
                      type="button"
                      data-bs-target="#carouselExampleInterval"
                      data-bs-slide="prev"
                    >
                      <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                      class="carousel-control-next"
                      type="button"
                      data-bs-target="#carouselExampleInterval"
                      data-bs-slide="next"
                    >
                      <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class="separateur"></div>

         <!-- Bouton Appel à L'action --> 

                  <div class="button-wrapper">
                      <a href="./carte.php" class="btn-reza">Véhicules occasions</a>
                      <a href="./booking.php" class="btn-reza">RDV en Atelier</a>
                  </div> 

                  <div class="separateur"></div>
                  
          </div>
        </div>
             
              
        
          </div>
        </div>
      </div>
    </div>
    
</main>   
                
<?php
include './Assets/includes/footer.html';
?>               
/********** Menu Hamburger **********/
/* Sélection des éléments HTML */
let link = document.getElementById('link')
let burger = document.getElementById('burger')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
link.addEventListener('click', function (e) {
  e.preventDefault()
  burger.classList.toggle('open')
  ul.classList.toggle('open')
})


/********** Filtre des véhicules de la page vehicules.php **********/

document.addEventListener("DOMContentLoaded", function () {
  const filterButton = document.getElementById("filterButton");
  const filterPanel = document.getElementById("filterPanel");
  const filterForm = document.getElementById("filterForm");
  const vehicleList = document.getElementById("vehicleList");

  // Utilisez une variable de statut pour suivre l'état de la fenêtre
  let isFilterPanelOpen = false;

  filterButton.addEventListener("click", function () {
      if (!isFilterPanelOpen) {
          // Afficher le panneau de filtre avec un effet de glissement
          filterPanel.style.left = "0"; // Afficher le panneau en position gauche
          filterPanel.classList.remove("hidden"); // Supprimer la classe hidden pour afficher le panneau
          isFilterPanelOpen = true; // Mettre à jour le statut de la fenêtre
      } else {
          // Masquer le panneau de filtre
          filterPanel.style.left = "-100%"; // Masquer le panneau en dehors de l'écran à gauche
          filterPanel.classList.add("hidden"); // Ajouter la classe hidden pour masquer le panneau
          isFilterPanelOpen = false; // Mettre à jour le statut de la fenêtre
      }
  });

  filterForm.addEventListener("submit", function (e) {
      e.preventDefault();
      
      // Récupérer les valeurs des filtres
      const priceRange = document.getElementById("priceRange").value;
      const mileage = document.getElementById("mileage").value;
      const year = document.getElementById("year").value;

      console.log("Soumission du formulaire de filtre");

      // Envoyer les valeurs au serveur avec AJAX (utilisez PHP pour traiter la requête)
      // Mettez à jour la liste de véhicules en fonction des filtres
      
      // Une fois la mise à jour terminée, masquez le panneau de filtre
      filterPanel.style.left = "-100%"; // Masquer le panneau en dehors de l'écran à gauche
      filterPanel.classList.add("hidden"); // Ajouter la classe hidden pour masquer le panneau
      isFilterPanelOpen = false; // Mettre à jour le statut de la fenêtre
  });
});




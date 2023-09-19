/********** Menu Hamburger **********/
/* Sélection des éléments HTML */
let link = document.getElementById('link')
let burger = document.getElementById('burger')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
/* Vérification si l'élément avec l'ID 'link' existe par rapport au fichier ajax-vehicules.php */
if (link !== null) {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        burger.classList.toggle('open');
        ul.classList.toggle('open');
    });
}


/********** Filtre des véhicules de la page vehicules.php **********/

document.addEventListener("DOMContentLoaded", function () {
    console.log("DOMContentLoaded event triggered"); // Vérification du déclenchement de l'événement
    const filterButton = document.getElementById("filterButton");
    const filterPanel = document.getElementById("filterPanel");
    const filterForm = document.getElementById("filterForm");
    const vehicleList = document.getElementById("vehicleList");

    // Utilisation d'une variable de statut pour suivre l'état de la fenêtre
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
        const priceMin = parseInt(priceRangeLeft.value);
        const priceMax = parseInt(priceRangeRight.value);
        const mileageMin = parseInt(mileageLeft.value);
        const mileageMax = parseInt(mileageRight.value);
        const yearMin = parseInt(yearLeft.value);
        const yearMax = parseInt(yearRight.value);

        console.log("Soumission du formulaire de filtre");

        // Envoie des valeurs au serveur via AJAX 
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {

                // MAJ de la liste des véhicules en fonction des filtres
                const vehiclesFiltered = JSON.parse(xhr.responseText);

                // Utilisation de la fonction fetch pour envoyer une requête POST au serveur PHP
                fetch('../ajax-vehicules.php', {
                    method: 'POST',
                    body: new URLSearchParams({
                        priceRangeLeft: priceMin,
                        priceRangeRight: priceMax,
                        mileageLeft: mileageMin,
                        mileageRight: mileageMax,
                        yearLeft: yearMin,
                        yearRight: yearMax
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Données JSON reçues:", data); // Vérification des données reçues
                        // Une fois que vous avez les résultats (data), mettez à jour la liste des véhicules
                        filterVehicles(data);
                    })
                    .catch(error => {
                        console.error('Erreur lors de la récupération des véhicules filtrés:', error);
                    });


                // Fonction pour filtrer les véhicules 
                function filterVehicles(data) {
                    console.log("Fonction filterVehicles appelée avec les données:", data); // Vérification de l'appel à la fonction
                    const vehiclesFiltered = data;
                    // Supprimer tous les véhicules existants de la liste
                    while (vehicleList.firstChild) {
                        vehicleList.removeChild(vehicleList.firstChild);
                    }

                    // Ajouter les véhicules filtrés à la liste
                    vehiclesFiltered.forEach(vehicle => {
                        const vehicleDiv = document.createElement('div');
                        vehicleList.appendChild(vehicleDiv);
                    });
                }
            }
        };
});


// Sélection des éléments en fonction de la plage de valeurs de prix, 
//du nombre de kilomètres et année de circulation

const priceRangeLeft = document.getElementById("priceRangeLeft");
const priceRangeRight = document.getElementById("priceRangeRight");
const mileageLeft = document.getElementById("mileageLeft");
const mileageRight = document.getElementById("mileageRight");
const leftValue = document.querySelector(".leftValue");
const rightValue = document.querySelector(".rightValue");
const leftValueKm = document.querySelector(".leftValueKm");
const rightValueKm = document.querySelector(".rightValueKm");
const leftValueYear = document.querySelector(".leftValueYear");
const rightValueYear = document.querySelector(".rightValueYear");


// MAJ des valeurs affichées en fonction de la position des curseurs
priceRangeLeft.addEventListener("input", function () {
    const value = this.value;
    leftValue.textContent = `${value} €`;
});

priceRangeRight.addEventListener("input", function () {
    const value = this.value;
    rightValue.textContent = `${value} €`;
});


mileageLeft.addEventListener("input", function () {
    const valuekm = this.value;
    leftValueKm.textContent = `${valuekm} km`;
});

mileageRight.addEventListener("input", function () {
    const valuekm = this.value;
    rightValueKm.textContent = `${valuekm} km`;
});


yearLeft.addEventListener("input", function () {
    const valueyear = this.value;
    leftValueYear.textContent = `${valueyear} an`;
});

yearRight.addEventListener("input", function () {
    const valueyear = this.value;
    rightValueYear.textContent = `${valueyear} an`;
});


});
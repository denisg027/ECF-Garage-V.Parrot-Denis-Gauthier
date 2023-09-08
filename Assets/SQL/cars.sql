-- Création de la base de données pour le garage V.Parrot
CREATE DATABASE IF NOT EXISTS GarageVParrot;

-- Sélection de la base de données
USE GarageVParrot;

-- Création de la table pour stocker les informations sur les voitures d'occasion
CREATE TABLE IF NOT EXISTS voitures (
     id  INT AUTO_INCREMENT PRIMARY KEY,
     marque  VARCHAR(255) NOT NULL,
     modele  VARCHAR(255) NOT NULL,
     prix  DECIMAL(10, 2) NOT NULL,
     annee  INT NOT NULL,
     kilometrage  INT NOT NULL,
     image_principale  VARCHAR(255) NOT NULL,
     caracteristiques  TEXT,
     equipements  TEXT,
     options  TEXT
);

-- Insertion des informations sur les voitures d'occasion
INSERT INTO voitures  ( id ,  marque ,  modele ,  prix ,  annee ,  kilometrage ,  image_principale ,  caracteristiques ,  equipements ,  options ) 
VALUES (
     NULL, 
     'Peugeot', 
     '208 allure', 
     '13599', 
     '2018', 
     '60000', 
     'Peugeot-208-allure.webp', 
     'Catégorie : Berline
      Référence : LCD 282
      Puissance fiscale : 5 CV
      Puissance din : 100 Ch
      Année : 23/07/2018
      Kilométrage : 60000 km
      Première main : non
      Carburant : Diesel
      Boite de vitesse : Manuelle
      Taille des roues : 195/55 R16',
      
       'AUDIO - TÉLÉCOMMUNICATIONS\r\nPeugeot Connect SOS et Assistance\r\n- Appel d\'Assistance Localisé\r\n- Appel d\'Urgence Localisé\r\nCONDUITE\r\nPack visibilité\r\n- Allumage des phares automatique\r\n- Capteur de pluie\r\n- Rétroviseur intérieur électrochrome\r\nAide au démarrage en côte\r\nLimiteur de vitesse\r\nRégulateur de vitesse\r\nEXTÉRIEUR\r\nBoucliers AV et AR couleur caisse\r\nCalandre chromée\r\nCeinture de vitrage chromée\r\nEssuie-glace arrière\r\nFeux arrière à LED\r\nFeux de freinage d\'urgence\r\nFeux de jour\r\nFeux de jour à LED\r\nFiltre à particules\r\nPhares additionnels en virage\r\nPhares halogènes\r\nRadar de stationnement AR\r\nRépétiteurs de clignotant dans rétro ext\r\nRétroviseurs dégivrants\r\nRétroviseurs ext. indexés à la marche AR\r\nRétroviseurs rabattables automatique\r\nRétroviseurs rabattables électriquement\r\nRétroviseurs électriques\r\nINTÉRIEUR\r\nAccoudoir central AV\r\nBacs de portes avant\r\nBanquette 1/3-2/3\r\nBanquette AR rabattable\r\nBanquette arrière 3 places\r\nBoite à gant fermée\r\nClim automatique bi-zones\r\nCompte tours\r\nFiltre à Pollen\r\nLampe de coffre\r\nMiroir de courtoisie conducteur éclairé\r\nMiroir de courtoisie passager éclairé\r\nOrdinateur de bord\r\nOuverture des vitres séquentielle\r\nPoches d\'aumonières\r\nPrise 12V\r\nSièges AV réglables en hauteur\r\nSièges avant sport\r\nTablette cache bagages\r\nTempérature extérieure\r\nVerrouillage auto. des portes en roulant\r\nVerrouillage centralisé à distance\r\nVitres arrière électriques\r\nVitres avant électriques\r\nVitres teintées\r\nVolant cuir\r\nVolant réglable en profondeur et hauteur\r\nSÉCURITÉ\r\nABS\r\nAide au freinage d\'urgence\r\nAirbag conducteur\r\nAirbag passager déconnectable\r\nAirbags latéraux avant\r\nAirbags rideaux AV et AR\r\nAntidémarrage électronique\r\nAntipatinage\r\nDétecteur de sous-gonflage indirect\r\nEBD\r\nESP\r\nPhares antibrouillard\r\nPréparation Isofix\r\nTroisième ceinture de sécurité', NULL);
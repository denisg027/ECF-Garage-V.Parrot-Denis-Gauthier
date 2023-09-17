<?php
session_start();
require './Espace-admin/database.php';

try {
    $db = Database::connect();

    // Vérifiez si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les valeurs du formulaire
        $referenceVehicule = isset($_POST['reference']) ? $_POST['reference'] : '';
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        // Insertion du message pour le véhicule choisi
        $query = "INSERT INTO contact (user_id, lastname, firstname, email, phone, message) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $db->prepare($query);
        $statement->execute([$referenceVehicule, $nom, $prenom, $email, $telephone, $message]);

        echo "Message enregistré avec succès.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de l'enregistrement de votre message : " . $e->getMessage();
} finally {
    Database::disconnect();
}
?>


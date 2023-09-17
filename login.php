<!-- Formulaire de connection de l'utilisateur ou de l'administrateur
     Redirection vers la page de profil pour l'utilisateur et la page board (tableau de bord) pour l'administrateur -->

     <?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './Espace-admin/database.php';

$pdo = Database::connect();

if ($pdo) {
    // Connexion réussie à la base de données
} else {
    // Échec de la connexion à la base de données
    echo "Échec de la connexion à la base de données";
    exit();
}

$error = "";

if (isset($_POST["email"], $_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email non valide";
    } else {
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        if (!$user || !password_verify($password, $user["password"])) {
            $error = "Mauvais login ou mot de passe!";
        } else {
            $_SESSION["user"] = [
                "id"        => $user["id"],
                "firstname" => $user["firstname"],
                "lastname"  => $user["lastname"],
                "email"     => $user["email"],
                "phone"     => $user["phone_id"],
            ];

            if ($user["role"] === 'admin') {
                $_SESSION["role"] = "admin"; // Définition du rôle Administrateur
                header("Location: Espace-admin/board.php");
                exit();
            } else {
                header("Location: profil.php");
                exit();
            }
        }
    }
}
?>

<body>
    <!-- formulaire de connexion -->
    <main id="main">
        <div class="form-container">
            <form action="login.php" method="post">
                <h3>Se connecter</h3>
                <input type="email" id="email" name="email" required placeholder="Votre Email" autocomplete="email">
                <input type="password" id="password" name="password" required placeholder="Votre Mot de Passe">
                <input type="submit" name="submit" value="Se connecter" class="form-btn">
            </form>
        </div>
    </main>
</body>

</html>

<?php
include './Assets/includes/footer.html';
?>


    



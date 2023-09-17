<!-- Formulaire d'enregistrement de l'utilisateur 
     Redirection vers la page de profil utilisateur-->

     
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
include 'board-head.html';
include 'board-navbar.php';
require 'database.php';

$db = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

if ($db) {
  echo "Connexion réussie à la base de données";
} else {
  echo "Échec de la connexion à la base de données";
}

$error = "";
if (!empty($_POST)) {
  if (
    isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["phone_id"], $_POST["password"], $_POST["cpassword"])
    && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["phone_id"])  && !empty($_POST["password"]) && !empty($_POST["cpassword"])
  ) {

    // strip_tags — Supprime les balises HTML et PHP d'une chaîne
    $firstname = strip_tags($_POST["firstname"]);
    $lastname  = strip_tags($_POST["lastname"]);
    $email     = $_POST["email"];
    $phone_id = strip_tags($_POST["phone_id"]);
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $error = "L'adresse e-mail est incorrecte";
    }
    // hash du mot de passe
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $cpassword = password_hash($_POST["cpassword"], PASSWORD_DEFAULT);


    //Vérification si l'e-mail existe
    $sql = "SELECT email FROM users WHERE email=:email";
    $query = $db->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;

    if ($query->rowCount() > 0) {
      echo "<span style='color:red'>Cette adresse e-mail existe déjà !</span>";
      $error = "Cette adresse e-mail existe déjà !";
    } else {
      // insertion de l'utilisateur dans la base de données en utilisant des requêtes préparées pour éviter les injections SQL
      try {
        $sql = "INSERT INTO users (firstname, lastname, email, phone_id, password, cpassword, role) VALUES (:firstname, :lastname, :email, :phone_id, :password, :cpassword, :role)";

        $query = $db->prepare($sql);
        $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
        $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->bindParam(":phone_id", $phone_id, PDO::PARAM_STR);
        $query->bindParam(":password", $password, PDO::PARAM_STR);
        $query->bindParam(":cpassword", $cpassword, PDO::PARAM_STR);
        $query->bindValue(":role", 'employee', PDO::PARAM_STR);
        $query->execute();

        // Vérification si l'insertion a réussi
        if ($query->rowCount() > 0) {
          echo "L'utilisateur a été enregistré avec succès dans la base de données.";
        } else {
          echo "Une erreur s'est produite lors de l'enregistrement de l'utilisateur.";
        }


        //récupérer l'ID de l'utilisateur créé
        $user_id = $db->lastInsertId();

        //session

        $_SESSION["users"] = [
          "user_id"        => $user_id,
          "firstname" => $_POST["firstname"],
          "lastname"  => $_POST['lastname'],
          "email"     => $_POST["email"],
          "phone_id" => $_POST["phone_id"],
          // "role"      => "employee"
        ];

        header("Location: ../profil.php");
      } catch (PDOException $e) {
        echo "Une erreur est survenue lors de l'insertion dans la base de données : " . $e->getMessage();
      }
    }
  }
}

?>


<main id="main">
  <!-- formulaire d'enregistrement -->
  <div class="form-container">
    <form action="create-employee.php" method="post">
      <h3>Créer un(e) employé(e)</h3>

      <label for="firstname">Prénom</label>
      <input type="text" id="firstname" name="firstname" required="" placeholder="Votre prénom" autocomplete="given-name">
      <label for="lastname">Nom</label>
      <input type="text" id="lastname" name="lastname" required="" placeholder="Votre nom" autocomplete="family-name">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required="" placeholder="Votre email" autocomplete="email">
      <label for="phone_id">Téléphone</label>
      <input type="text" id="phone_id" name="phone_id" required="" placeholder="Votre téléphone" autocomplete="tel">
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required="" placeholder="Votre Mot de Passe" autocomplete="new-password">
      <label for="cpassword">Confirmer votre mot de passe</label>
      <input type="password" id="cpassword" name="cpassword" required="" placeholder="Confirmer votre Mot de Passe" autocomplete="new-password">
      <!-- <label for="role">Rôle : </label>
    <select id="role" name="role">
      <option value="employee">Employé(e)</option>
      <option value="admin">Administrateur</option>
    </select> -->

      <input type="submit" name="submit" value="Enregistrez le nouvel employé" class="form-btn">
      <p>Testez ce nouveau compte ? <a href="../login.php">Connexion</a></p>
      <div class="form-actions">
        <a class="btn btn-primary create" href="gestion-employee.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        Retour
                    </a>
        </div>
    </form>

  </div>


</main>


<?php
include 'board-footer.html';
?>
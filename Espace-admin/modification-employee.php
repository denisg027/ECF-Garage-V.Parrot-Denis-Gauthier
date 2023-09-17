<?php
include './board-head.html';
include './board-navbar.php';
require './database.php';


function checkInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Récupération de l'ID en Get de l'utilisateur à modifier
if (!empty($_GET['id'])) {
  $id = checkInput($_GET['id']);
}

$db = Database::connect();
// Vérification si l'utilisateur à modifier existe
$sql = "SELECT * FROM users WHERE user_id = :id";
$query = $db->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);

if (!$user) {
  header("Location: gestion-employee.php"); // Rediriger vers la liste des employés si l'utilisateur à modifier n'existe pas
  exit();
}

// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
  // Validation des données du formulaire
  $role = $_POST['role'];

  // Vérification si le rôle est valide
  $allowed_roles = array('employee', 'admin');
  if (!in_array($role, $allowed_roles)) {
    $error = "Le rôle sélectionné n'est pas valide.";
  } else {
    // Mise à jour du rôle de l'utilisateur dans la base de données
    $sql = "UPDATE users SET role = :role WHERE user_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    $query->execute();

    header("Location: users.php"); // Rediriger vers la liste des utilisateurs après la mise à jour réussie
    exit();
  }
}
?>

<body>
  <div class="space"></div>
  <div class="container admin">
    <div class="row">
      <div class="col-md-12">
        <h1><strong>Modifier un(e) employé(e)</strong></h1>

        <form class="form" role="form" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="firstname">Prénom:</label>
            <input type="text" class="form-control" id="firstname" value="<?php echo $user['firstname']; ?>" readonly>
          </div>

          <div class="form-group">
            <label for="lastname">Nom:</label>
            <input type="text" class="form-control" id="lastname" value="<?php echo $user['lastname']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" value="<?php echo $user['email']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="phone_id">Téléphone:</label>
            <input type="text" class="form-control" id="phone_id" value="<?php echo $user['phone_id']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="role">Rôle:</label>
            <input type="text" class="form-control" id="role" value="<?php echo $user['role']; ?>" readonly>
          </div>
          
          <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="bi bi-pencil"></span> Modifier</button>
                        <a class="btn btn-primary" href="gestion-employee.php"><span class="bi-arrow-left"></span> Retour</a>
                    </div>
        </form>
      </div>

    </div>
  </div>
  <div class="space"></div>
</body>



<?php
include 'board-footer.html';
?>
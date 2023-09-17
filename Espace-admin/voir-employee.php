<?php
include './board-head.html';
include './board-navbar.php';
require './database.php';


// Récupérer l'ID en get de l'utilisateur à voir
if(!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}
 
$db = Database::connect();
$statement = $db->prepare("SELECT * FROM users WHERE user_id = ?");
$statement->execute(array($id));
$users = $statement->fetch();
Database::disconnect();

function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<body>
<div class="space"></div>
  <div class="container admin">
    <div class="row">
      <div class="col-md-12">
        <h1><strong>Voir la fiche employé(e)</strong></h1>
        
        <form class="form" action="<?php echo 'modification-menu.php?id=' . $id; ?>" role="form" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="firstname">Prénom:</label>
            <input type="text" class="form-control" id="firstname" value="<?php echo $users['firstname']; ?>" readonly>
          </div>

          <div class="form-group">
            <label for="lastname">Nom:</label>
            <input type="text" class="form-control" id="lastname" value="<?php echo $users['lastname']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" value="<?php echo $users['email']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="phone_id">Téléphone:</label>
            <input type="text" class="form-control" id="phone_id" value="<?php echo $users['phone_id']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="role">Rôle:</label>
            <input type="text" class="form-control" id="role" value="<?php echo $users['role']; ?>" readonly>
          </div>
          
        </form>
        
        <div class="form-actions">
        <a class="btn btn-primary" href="gestion-employee.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        Retour
                    </a>
        </div>
      </div>
      
    </div>
  </div>   
</body>

<?php
include 'board-footer.html';
?>
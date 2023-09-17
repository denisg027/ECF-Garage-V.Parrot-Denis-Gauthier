<?php
include './board-head.html';
include './board-navbar.php';
require './database.php';
 
// Récupérer l'ID en get 
    if (!empty($_GET['id'])) {
        $id = checkInput($_GET['id']);
    }

    if (!empty($_POST)) {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare('SELECT ' . $table . '.id, ' . $table . '.nom, ' . $table . '.description, ' . $table . '.prix, ' . $table . '.photos, categories.nom AS categorie FROM ' . $table . ' LEFT JOIN categories ON ' . $table . '.categories_id = categories.id WHERE ' . $table . '.id = ?');
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: gestion-carte.php"); 
    }

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
                <h1><strong>Supprimer un plat, une boisson ou un vin</strong></h1>
                <br>
                <form class="form" action="suppression-employee.php" role="form" method="post">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning">Êtes-vous sûr de vouloir supprimer l'article ?</p>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-warning">Oui</button>
                      <a class="btn btn-secondary" href="gestion-employee.php">Non</a>
                    </div>
                </form>
            </div>
        </div>   
    </body>
</html>

<?php
include 'board-footer.html';
?>
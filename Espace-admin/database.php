<?php
// Vérifier si la classe Database est déjà définie
if (!class_exists('Database')) {
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "garagevparrot";
    private static $dbUsername = "VParrot";
    private static $dbPassword = "VtPt092023";
    
    private static $connection = null;
    
   
    public static function connect()
    {
        if (self::$connection === null) {
            try {
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gère les erreurs avec des exceptions
                    PDO::ATTR_EMULATE_PREPARES => false, // Désactive la simulation des requêtes préparées
                ];
                
                self::$connection = new PDO(
                    "mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,
                    self::$dbUsername,
                    self::$dbPassword,
                    $options
                );
            } catch (PDOException $e) {
                // Gère l'erreur de connexion à la BDD
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
                exit();
            }
        }
        
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }
}

}

?>

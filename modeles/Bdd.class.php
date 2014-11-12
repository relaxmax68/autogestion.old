<?
//classe pour gérer la connexion de données avec mysql via PDO

/*
 * Classe implémentant un singleton pour PDO
 * @author Savageman
 * De cette manière on pourra en récupérer l'instance à souhait
 */
class Bdd extends PDO {

  private static $_instance;

  /* Constructeur : héritage public obligatoire par héritage de PDO */
  public function __construct( ) {
  
  }

  /* Singleton */
  public static function getInstance() {
    
    //fichier de configuration de la base de données
    require_once("configuration.php");

    if (!isset(self::$_instance)) {
      
      try {
        // Connection au serveur
        $dns          = 'mysql:host=localhost;dbname=autogestion';
        $utilisateur  = 'root';
        $motDePasse   = 'musique(\'&';
        self::$_instance = new PDO($dns,$utilisateur,$motDePasse,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        self::$_instance->exec("SET NAMES utf8");

      } catch (PDOException $e) {
      
        echo $e;
      }
    } 
    return self::$_instance; 
  }
}
?>

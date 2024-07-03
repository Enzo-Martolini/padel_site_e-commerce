
    <?php
    class Bdd {
    
        protected $bdd;
    
        function __construct(){
            $dsn = "mysql:host=127.0.0.1;port=8889;dbname=site_padel";
            $dbuser = "root";
            $dbpass = "root";
    
            try {
                $this->bdd = new PDO($dsn, $dbuser, $dbpass);
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            } catch (PDOException $e) {
                echo 'Échec de la connexion : ' . $e->getMessage();
                exit;
            }
        }
    }
    ?>
    
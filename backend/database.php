<?php
class Bdd {

    protected $bdd;

    function __construct(){
        $dns = "mysql:host=localhost;dbname=site_padel";
        $dbuser = "root";
        $dbpass = "";

       /*  $dns = "mysql:host=localhost;dbname=quiznight";
        $dbuser = "root";
        $dbpass = ""; */

        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=site_padel;charset=utf8','root','root');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Echec de la connexion : ' . $e->getMessage();
            exit;
        }
    }

}

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Bdd {
    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost:8000;dbname=site_padel;charset=utf8","root", ""); 
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}
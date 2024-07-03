<?php
try {
    $dsn = "mysql:host=127.0.0.1;dbname=site_padel;charset=utf8";
    $dbuser = "root";
    $dbpass = "root";

    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
}
?>

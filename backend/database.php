<?php
   try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=8889;dbname=site_padel","root","root");
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }


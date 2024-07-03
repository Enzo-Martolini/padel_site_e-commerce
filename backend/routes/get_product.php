<?php
// backend/api/get_products.php

require_once '../../backend/classes/product.php';

header('Content-Type: application/json'); // Définir le type de contenu comme JSON

// Créez une instance de la classe product
$products = new product($pdo);

// Récupérez tous les produits
$productList = $products->getAllProduct();

// Convertir les données des produits en JSON
echo json_encode($productList);

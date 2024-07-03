<?php

// Lire le contenu du fichier JSON
$product = file_get_contents('product.json');

// Décoder le JSON en tableau associatif
$product = json_decode($product, true);

// Vérifier la structure des données
echo '<pre>';
// var_dump($product);

// Accéder aux données produits (en supposant que les données sont dans le troisième élément du tableau)
$productsData = $product[2]['data'];

$product = new Product();
$product->getAllProduct();
var_dump ($product->getAllProduct());
// Afficher un produit spécifique pour vérification
var_dump($productsData);
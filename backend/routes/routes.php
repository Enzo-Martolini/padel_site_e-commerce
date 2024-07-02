<?php
require_once(__DIR__ . '/../Bdd.php');
require_once(__DIR__ . '/../classes/product.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

function handleRequest($bdd, $product) {
  $method = $_SERVER['REQUEST_METHOD'];
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri = explode('/', trim($uri, '/'));

  if ($method == 'GET' && isset($uri[0])) {
      switch ($uri[0]) {
          case 'produits':
              echo json_encode($product->getAllProduct());
              break;
          default:
              http_response_code(404);
              echo json_encode(['message' => 'Route non trouvée']);
              break;
      }
  } else {
      http_response_code(404);
      echo json_encode(['message' => 'Route non trouvée']);
  }
}

$bdd = new Bdd();
$product = new Product();
handleRequest($bdd, $product);
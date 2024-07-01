<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'classes/Product.php';

$product = new Product($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['id_product'], $data['name'], $data['price'], $data['description'], $data['category'], $data['subcategory'])) {
        $product->updateProduct($data['id_product'], $data['name'], $data['price'], $data['description'], $data['category'], $data['subcategory']);
        http_response_code(200);
        echo json_encode(["message" => "Product updated successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Missing parameters"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method not allowed"]);
}
?>

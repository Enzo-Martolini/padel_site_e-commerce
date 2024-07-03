<?php
require_once '../../backend/classes/product.php';
$products = new product($pdo);
$product = $products -> getAllProduct();
$brand = json_decode($product[1]['subcategory']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/test_card.css">
    <link rel="stylesheet" href="../style.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>
<body>
    <script type="module">
      import { AfficherHeader } from "../components/Header.js";
      document.addEventListener("DOMContentLoaded", () => {
        const header = AfficherHeader();
        document.getElementById("header").appendChild(header);
      });
    </script>

    <div id="header"></div> 
    <div class="card_container">
        <div class="card_wrapper" style="display:grid">

        </div>
    </div>
    <script src="../script/get_product.js"></script>
</body>
</html>
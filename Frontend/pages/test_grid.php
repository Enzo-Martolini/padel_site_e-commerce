<?php 

require_once '../../backend/classes/product.php';

$products = new product($pdo);

$product = $products -> getAllProduct();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/card.css">

    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="css/searchBar.css" />
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
    <div class="cardsContainer">
        <?php
            echo '<div class=\'wrapper\'>';
            foreach ($product as $value)
            {
                $brand = json_decode($value['subcategory']);
                if (!isset($brand[1])){
                    $brand_up = $brand[0];
                } else {
                    $brand_up = $brand[1];
                }

                echo <<<HTML
                <div class="card">
                    <p class="name">{$value['name']}</p>
                    <img src="../../{$value['img_src']}" style:width=50px; height=200px>
                    <div class="description">
                        <div class=price>
                        <p>{$value['price']}</p>
                        </div>
                        <p class="brand">{$brand_up}</p>
                        <p class="text_description">{$value['description']}</p>
                        </div>                
                </div>
                HTML;
            }
            echo '</div class=\'wrapper\'>';
        ?>
    </div>
</body>
</html>
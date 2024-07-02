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
</head>
<body>
    <div class="card">
        <img src="<?=$product['img_src']?>" alt="" srcset="">
    </div>
</body>
</html>
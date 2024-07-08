<?php require_once(__DIR__ . '/classes/product.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $products = new Product();
    $product = $products->getAllProduct();
    var_dump('test');
    foreach ($product as $data){
       if (isset($data['img_src'])) {
            echo '<img src="'. $data['img_src'].'"></br>' ;
            echo $data['img_src'] . '</br>';
        }
    }
    
   
   
    ?>
</body>
</html>
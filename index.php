<?php include 'backend/api.php' ?>
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
    $product = getProduct();
    foreach ($product as $data){
        if (strpos($data['subcategory'], 'head') !== false) {
            echo $data['name'] . "</br></br>";
        }
        
    }
    ?>
</body>
</html>
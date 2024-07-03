<?php
session_start();

if (!isset($_SESSION['id']) || $_SESSION['role']!=='admin'){
    header('Location: error.php');
    exit();
}

include "../../backend/classes/product.php";
$product = new Product();
$data = $product->getAllProduct()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">

    <!--Police-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Produits enregistrés</h2>
    <div id="product-header">
        <h4>ID</h4>
        <h4>Nom</h4>
        <h4>Prix</h4>
        <h4>Description</h4>
        <h4>Type</h4>
        <h4>Genre</h4>
        <h4>Marque</h4>
    </div>
    <?php foreach ($data as $value){
        $category = json_decode($value['category']);
        $subcategory = json_decode($value['subcategory']);
        $subcategory_one = isset($subcategory[1]) ? $subcategory[1] : '';
        echo <<<HTML
            <div class="product">
                <p class="id">{$value['id']}</p>   
                <p class="modifiable">{$value['name']}</p>
                <p class="modifiable">{$value['price']}</p>
                <p class="modifiable">{$value['description']}</p>
                <p class="modifiable">{$category}</p>
                <p class="modifiable">{$subcategory[0]}</p>
                <p class="modifiable">{$subcategory_one}</p>
                <div class="product-modification">
                     <img src="../assets/icon_pen.png" width=30px height=30px class=modify-btn-pen>
                    <form action="" method="post">
                        <input type="hidden" name="delete" value="{$value['id']}" >
                        <button type="submit">
                            <img src="../assets/icon_cross.png" width=30px height=30px class=modify-btn-cross>
                        </button>
                    </form>
                </div>
            </div>
        HTML;    
} ?>
    <h2>Ajoute un nouvel article</h2>
    <form action="admin.php" method="post">
        <input type="text" name="name" placeholder="Nom du produit">
        <input type="text" name="description" placeholder="Description du produit">
        <input type="number" name="price" placeholder="Prix unitaire du produit">
        <input type="text" name="type" placeholder="Type de produit"> <!--A modifier -->
        <input type="text" name="gender" placeholder="Genre"> <!--A modifier -->
        <input type="text" name="brand" placeholder="Marque"> <!--A modifier -->
        <input type="text" name="img" placeholder="Nom de l'image"> <!--A modifier -->
        <button type="submit" id="add-btn">Envoyer</button>
    </form>
    <?php 

    if (isset($_POST['name'], $_POST['price'], $_POST['description'], $_POST['type'], $_POST['gender'], $_POST['brand'], $_POST['img'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $gender = $_POST['gender'];
        $brand = $_POST['brand'];
        $img = $_POST['img'];

        $product->addProduct($name, $price, $description, $type, $gender, $brand, $img);
        
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    
    if (isset($_POST['delete'])){
        $id_delete = $_POST['delete'];
        $product->deleteProduct($id_delete);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    
    ?>
<script src="../script/admin.js"></script>
</body>
</html>
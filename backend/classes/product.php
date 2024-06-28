<?php

require_once __DIR__ . '/../database.php';

class product {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function getAllProduct (){
        try {
        $ins = $this->pdo->prepare("SELECT * FROM product");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();

        $result = $ins->fetchAll();
        return $result;
        } catch (PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
    public function addProduct($name, $price, $description, $type, $gender, $brand, $img_src){
        $category = json_encode([$type]);
        $subcategory = json_encode([$gender, $brand]);
        try {
            $ins = $this->pdo->prepare("INSERT INTO `product`(`name`, `description`, `price`, `category`, `subcategory`, `img_src`, `note`) VALUES (:name, :description, :price, :category, :subcategory, :img_src, null)");
            $ins->execute(array(
                ":name"=>$name,
                ":description"=>$description,
                ":price"=>$price,
                ":category"=>$category,
                ":subcategory"=>$subcategory,
                ":img_src"=>$img_src,
            ));
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        
    }
    public function deleteProduct($id_product){
        try {
        $ins = $this->pdo->prepare("DELETE FROM `product` WHERE id=?");
        $ins->execute(array($id_product));
        } catch (PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
}
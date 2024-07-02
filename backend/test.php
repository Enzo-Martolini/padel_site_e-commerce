<?php
require_once 'classes/product.php';

$product = new Product();
$product->getAllProduct();
var_dump ($product->getAllProduct());
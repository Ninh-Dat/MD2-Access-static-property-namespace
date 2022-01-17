<?php
include_once "Models/Product.php";
include_once "Services/PorductManager.php";


$productManager = new \Services\ProductManager();
$productManager->add(new \Models\Porduct("Laptop", 2000));
$productManager->add(new \Models\Porduct("ninhdat",2000));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
    echo $product->getPrice() . "<br/>";
}
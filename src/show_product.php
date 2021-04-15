<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];

$order = $entityManager->find('Order', new OrderId($id));

if ($order === null) {
    echo "No product found.\n";
    exit(1);
}

echo print_r($order->getName());

$product = $entityManager->find('Product', new ProductId($id));

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo print_r($product->getName());


$category = $entityManager->find('Category', new CategoryId($id));

if ($category === null) {
    echo "No product found.\n";
    exit(1);
}

echo print_r($category->getName());
<?php

// create_product.php <name>
require_once "bootstrap.php";

$newProductId = $argv[1];
$newProductName = $argv[2];
$categoryIds = explode(",", $argv[3]);

$product = new Product();
$product->setId(new ProductId($newProductId));
$product->setName($newProductName);

foreach ($categoryIds as $categoryId) {
    $category = $entityManager->find("Category", $categoryId);
    $product->assignToCategory($category);
}

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

<?php
// create_product.php <name>
require_once "bootstrap.php";

$newProductName = $argv[1];
$categoryIds = explode(",", $argv[2]);

$product = new Product();
$product->setName($newProductName);

foreach ($categoryIds as $categoryId) {
    $category = $entityManager->find("Category", $categoryId);
    $product->assignToCategory($category);
}

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

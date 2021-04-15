<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', new ProductId($id));

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo print_r($product->getCategory()[2]->getName());

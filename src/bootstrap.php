<?php
// bootstrap.php

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/../config/xml-entities"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// Register my type
Type::addType('product_id', 'ProductIdType');
Type::addType('category_id', 'CategoryIdType');
Type::addType('order_id', 'OrderIdType');


// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrine2_test',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
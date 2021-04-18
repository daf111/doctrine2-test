<?php
// src/Product.php

final class Order
{
    protected OrderId $id;
    protected ProductId $product_id;
    protected ProductName $name;

    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
}
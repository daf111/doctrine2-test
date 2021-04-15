<?php
// src/Product.php

final class Product
{
    protected ProductId $id;
    protected ProductName $name;
    protected $categories;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function assignToCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    public function getCategory()
    {
        return $this->categories;
    }
}
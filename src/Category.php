<?php
// src/Product.php

class Category
{
    protected CategoryId $id;
    protected CategoryName $name;
    
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
    
}
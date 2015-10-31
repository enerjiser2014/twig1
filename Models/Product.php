<?php

namespace App\Models;

class Product
    extends Model
{
    public function getTable()
    {
        return 'Product';
    }

    public function getIdName()
    {
        return 'id';
    }

    public function getAllProducts()
    {
        return $this->getAllRecords();
    }
}
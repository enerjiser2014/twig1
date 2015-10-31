<?php

namespace App\Models;

class Service
    extends Model
{
    public function getTable()
    {
        return 'Service';
    }

    public function getIdName()
    {
        return 'id';
    }

    public function getAllServices()
    {
        return $this->getAllRecords();
    }
}
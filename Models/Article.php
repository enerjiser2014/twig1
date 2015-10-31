<?php

namespace App\Models;

class Article
    extends Model
{
    public function getTable()
    {
        return 'Article';
    }

    public function getIdName()
    {
        return 'id';
    }

    public function getAllMessages()
    {
        return $this->getAllRecords();
    }
}
<?php

namespace App\Models\Admin;

use App\Models\Model;

class Profile extends Model
{
    public function getTable()
    {
        return 'profile';
    }

    public function getIdName()
    {
        return 'id';
    }
}
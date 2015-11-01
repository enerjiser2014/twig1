<?php

namespace App\Models\Admin;

use App\Models\Model;

class User extends Model
{
    public function getTable()
    {
        return 'user';
    }

    public function getIdName()
    {
        return 'id';
    }

    public function checkPassword()
    {

    }

    public function setPassword($password)
    {

    }

    public function changePassword()
    {

    }

    public function resetPassword()
    {

    }
}
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
        $validEmail = filter_var($this->email, FILTER_VALIDATE_EMAIL);

        if ($validEmail == true) {
            $this->hash = password_hash($password, PASSWORD_DEFAULT);
            $this->save();
        }
        return false;
    }

    public function changePassword()
    {

    }

    public function resetPassword()
    {

    }
}
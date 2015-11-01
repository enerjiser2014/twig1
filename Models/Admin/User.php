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
        // start 1* подумать как переделать это.
            $tmp=$this->getRecordBy('email',$validEmail);
            $this->id=$tmp->id;
        // end 1*
            $this->hash = password_hash($password, PASSWORD_DEFAULT);
            $this->save();
            return true;
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
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

    public function checkPassword($password)
    {
        $this->validEmail();
    }

    public function setPassword($password)
    {
        // проверяем валидность идентификатора пользователя
        // метод getIdByEmail верент false вслучае невалидного email
        // если email невалидный ничего не делаем и возвращаем false
        if ($this->getIdByEmail() == false) {
            return false;
        }
        $this->hash = password_hash($password, PASSWORD_DEFAULT);
        $this->save();
        return true;

    }

    public function changePassword()
    {

    }

    public function resetPassword()
    {

    }

    public function validEmail()
    {
        $this->email=filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function getIdByEmail()
    {
        // start 1* подумать как переделать это.
        $this->validEmail();
        if (true == (bool)$this->email) {
            $tmp=null;
            $tmp = $this->getRecordBy('email', $this->email);
            $this->id = $tmp->id;
            return $this->id;
        }
        $this->id = false;
        return false;
        // end 1*
    }

}
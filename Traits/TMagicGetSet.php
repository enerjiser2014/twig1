<?php

namespace App\Traits;

trait TMagicGetSet
{
    protected $magicProp = [];

    public function __get($name)
    {
        return $this->magicProp[$name];
    }

    public function __set($name, $value)
    {
        $this->magicProp[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->magicProp[$name]);
    }
}
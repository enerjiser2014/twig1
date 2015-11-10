<?php

namespace App\tests;
use App\Models\Product;


/**
 * Created by PhpStorm.
 * User: homepc
 * Date: 10.11.2015
 * Time: 0:16
 */
class testProduct extends \PHPUnit_Framework_TestCase
{
    public function test_getIdName() {
        $x = new Product();
        $this->assertEquals('id',$x->getIdName());
    }
}
<?php

namespace App\tests;
use App\Models\Service;

/**
 * Created by PhpStorm.
 * User: homepc
 * Date: 10.11.2015
 * Time: 0:16
 */
class testService extends \PHPUnit_Framework_TestCase
{
    public function test_getIdName() {
        $x = new Service();
        $this->assertEquals('id',$x->getIdName());
    }
}
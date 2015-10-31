<?php

namespace App\Controllers;

use App\Models\Product;
use App\Views\View;


class Products
{
    public function actionShow()
    {
        $products = (new Product())->getAllProducts();
      //  var_dump($products);
        View::display($products,'products.tmpl');
    }

    public function actionAdd()
    {

    }
}
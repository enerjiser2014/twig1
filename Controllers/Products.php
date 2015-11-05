<?php

namespace App\Controllers;

use App\Models\Product;
use App\Views\View;


class Products
{
    public function actionShow()
    {
        $products = (new Product())->getAllProducts();
        View::display('products.tmpl',$products);
    }

    public function actionAdd()
    {

    }
}
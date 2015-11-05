<?php

namespace App\Controllers;

use App\Models\Product;
use App\Views\View;


class ProductSummary
{
    public function actionShow()
    {
        $productId = $_GET['productid'];
        $product = (new Product())->getProductById($productId);
        View::display('productsummary.tmpl',$product);
    }

}
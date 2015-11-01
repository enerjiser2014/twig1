<?php

namespace App\Controllers;

use App\Models\Article;
use App\Views\View;


class Site
{
    public function actionShow()
    {
        $model = new Article();
        View::display(null,'main.tmpl');
    }

    public function actionAdd()
    {

    }
}
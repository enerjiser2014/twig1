<?php

namespace App\Controllers;

use App\Models\Article;
use App\Views\View;


class Main
{
    public function actionShow()
    {
        $model = new Article();
        View::display('main.tmpl',null);
    }

    public function actionAdd()
    {

    }
}
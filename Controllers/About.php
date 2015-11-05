<?php

namespace App\Controllers;

use App\Models\Article;
use App\Views\View;


class About
{
    public function actionShow()
    {
        $model = new Article();
        View::display('About.tmpl', null);
    }

    public function actionAdd()
    {

    }
}
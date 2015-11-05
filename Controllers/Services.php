<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Service;
use App\Views\View;


class Services
{
    public function actionShow()
    {
        $services = (new Service())->getAllServices();
        View::display('services.tmpl', $services);
    }

    public function actionAdd()
    {

    }
}
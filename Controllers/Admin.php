<?php

namespace App\Controllers;

use App\Views\View;

class Admin
{
    public function actionShow()
    {
        View::display('admin.tmpl',null);
    }
}
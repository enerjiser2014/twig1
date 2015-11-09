<?php

namespace App\Controllers;

use App\Models\Admin\User;
use App\Views\View;

class LogController
{
    public function actionLogin()
    {
        $account = new User();
        $account->email = $_POST['email'];
        $auth = $account->checkPassword($_POST['password']);
        if ($auth == true) {
            session_start();
            $_SESSION['user_auth']=true;
        }
        View::display('index.tmpl');
    }

    public function actionLogOut()
    {
        session_start();
        $_SESSION['user_auth']=false;
        session_destroy();
        View::display('index.tmpl');
    }

    public function actionAuthForm()
    {
        View::display('authform.tmpl');
    }

    public function actionRegisterForm()
    {
        View::display('register.tmpl');
    }

    public function actionRegister()
    {
        $account = new User();
        //$account->name = $_POST['name'];
        $account->email = $_POST['email'];
        $account->createUser();
        $account->setPassword($_POST['password']);
        View::display('main.tmpl');
    }
}
<?php

namespace App\Views;

class View
{
    public static function display($template,$m)
    {
        var_dump($x);
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '\..\templates');
        $twig = new \Twig_Environment($loader,
            [
                'cache' => false,
                'debug' => false,
            ]
            );
        $template = $twig->loadTemplate($template);
        echo $template->render(
            [
                'model' => $m,
            ]
            );
    }
}
<?php

namespace App\Views;

class View
{
    public static function display($template,$m=null)
    {
        $t = [
              1 => ['link1','name1'],
              2 => ['link2','name2'],
              3 => ['link3','name3'],
              4 => ['link4','name4'],
              5 => ['link5','name5'],
              6 => ['link6','name6'],
              7 => ['link7','name7'],
              8 => ['link8','name8'],
              9 => ['link9','name9'],

            ];
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../templates');
        $twig = new \Twig_Environment($loader,
            [
                'cache' => false,
                'debug' => false,
            ]
            );

        $twig->addGlobal('config', include __DIR__ . '/../config/config.php');

        $filtereuro = new \Twig_SimpleFilter('euro',function($price){
           return $price/72;
        });

        $twig->addFunction($filtereuro);

        $template = $twig->loadTemplate($template);
        echo $template->render(
            [
                'model' => $m,
                'tags' => $t,
            ]
            );
    }
}
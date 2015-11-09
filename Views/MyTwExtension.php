<?php

namespace App\Views;

class MyTwExtension extends \Twig_Extension
{

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        // TODO: Implement getName() method.
        return 'MyTwExtension';
    }

    public function getGlobals()
    {
        return [
            'config' => include __DIR__ . '/../config/config.php',
        ];
    }


    public function getFunctions()
    {
        return [
            'recomended' => new \Twig_SimpleFunction('recomended',function($tag){
                        return  [
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
                    }),
        ];
    }

    public function getFilters()
    {
        return [
            'euro' => new \Twig_SimpleFilter('euro',function($price){
                    return round($price/72,2);
                }),
            'dollar' => new \Twig_SimpleFilter('dollar',function($price){
                    return round($price/63,2);
                }),
        ];
    }

    public function getTests()
    {
        return [
            'testrecomend' => new \Twig_SimpleTest('testrecomend',function($id) {
                if ($id==rand(1,5)) {
                    return true;
                }
                 return false;
            })
        ];
    }

}
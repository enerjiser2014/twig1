<?php

define('debug_flug', 0);

spl_autoload_register('myAutoload');

function myAutoload($classname)
{
        $classpart = explode('\\', $classname);

        if ('App' == $classpart[0]) {
            unset($classpart[0]);
            $load = __DIR__ . '/' . implode('/', $classpart) . '.php';

            if (true == debug_flug) {
                echo $load . '<br>';
            }

            if (file_exists($load)) {
                require $load;
            }
            else {
                throw new Exception('autoload: <br>Класс с именем ' . $classname . ' не найден.');
            }

        }

}

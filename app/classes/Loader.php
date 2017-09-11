<?php
namespace app;

class Loader
{
    public function loadClass($class) /*app\Room*/
    {
        $arr = explode('\\', $class);
        // вырезать первый элемен в массиве
        $prefix = array_shift($arr);

        if ($prefix == "app") 
        {
            $prefix_file = "app/classes/";
            echo 'Путььььь: ' . $prefix_file . '<br>';
        }
        elseif ($prefix == "vendor") 
        {
            $prefix_file = "vendor/module/";
        }

        //echo "<br>";
        $file = $prefix_file . array_shift($arr) . ".php";

        if(is_file($file))
        {
            require_once $file;
        }
    }
}
<?php

class Loader
{
    public function loadClass($class)
    {
        if($class == "Room")
        {
            $file = '../app/classes/Room.php';
            echo 'Путььььь: '. $file;
        }
        elseif($class == "GoodRoom")
        {
            $file = "../vendor/module/GoodRoom.php";
        }

        if(is_file($file))
        {
            require_once $file;
        }
    }
}
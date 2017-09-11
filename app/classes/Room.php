<?php


// Унаследывать классы
class Room extends GoodRoom
{
    public $color = "red";

    public function getColor($newColor)
    {
        $this->color = $newColor;
    }

    public function getWindows()
    {
        return $this->windows;
    }
}
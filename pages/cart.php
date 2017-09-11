<?php

echo "<br>";
echo "Корзина";

$arr = ['var1' => 'value1', 'var2' => 'value2'];

//Функция вывода массива на экран
echo "<br><br>";
echo "Массив 1: ";
var_dump($arr);

//Функция принимает массивы
$arr_keys = array_keys($arr);

echo "<br><br>";
echo "Массив 2: ";
var_dump($arr_keys);

$var = 2134;

function user($var)
{
    global $var;
    echo "<br><br>Это моя функция епта " . $var;
}

user('Я тута');


echo '<br><br>';

class room
{
    public $color = "red";

    public function getColor($newColor)
    {
        $this->color = $newColor;
    }
}

$myRoom = new room();
echo "Комната 1 имеет цвет: " . $myRoom->color . "<br>";
$myRoom->getColor('Зеленый');
echo "Комната 1 имеет цвет: " . $myRoom->color . "<br>";

$myRoom_2 = new room();
echo "Комната 2 имеет цвет: " . $myRoom_2->color . "<br>";
$myRoom->getColor('Пурпурный');
echo "Комната 2 имеет цвет: " . $myRoom->color . "<br>";


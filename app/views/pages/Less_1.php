<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 06.09.2017
 * Time: 13:31
 */


$students = array('Вася', 'Петя', 'Борисик');
$fructs = ['Апельсин', 'Банан', 'Яблоко'];
$sinth = ['Стол' <= 'Дубовый', 'Стул' <= 'Хреновый'];

//echo '<br><br>';
//echo 'Имена: ', print_r($students);

//echo '<br><br>';
//echo 'Фрукты: ', print_r($fructs);

$str = "Стул";



for ($i = 0; $i < count($students); ++$i)
{
//    echo '<br><br>';
//    echo 'Зашел в цикл';
    if ($students[$i] < 3)
    {
        echo '<br><br>';
        echo ' [for] есть имя: ', $students[$i];
    } else {
        echo '<br><br>';
        echo ' [for] нет такого имени в массиве: ', $students[$i];
    }
}

for ($i = 0; $i < count($sinth); ++$i)
{
    if($sinth[$i] == $str)
    {
        echo '<br><br>';
        echo ' [$sinth] есть: ', $sinth[$i];
    }
    else
    {
        echo '<br><br>';
        echo ' [$sinth] нету: ', $sinth[$i];
    }
}

foreach ($students as $key => $value)
{
    echo "<br>";
    echo $value . " Привет!<br>";
}

echo '<br><br>';
echo 'Имя: ', $students[0];
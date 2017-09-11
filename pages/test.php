<?php
echo "Тест 1___________________________________________________<br>";

require '../app/classes/Loader.php';
//require ("../vendor/module/GoodRoom.php");

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);


$myRoom = new Room();
echo  'Форма комнаты: ' . $myRoom->form . '<br>';
$myRoom->echoInfo();
echo '<br>' . $myRoom->getWindows();

echo "<br>_________________________________________________________<br>";

echo "Тест 2___________________________________________________<br>";

echo "<br>_________________________________________________________<br>";
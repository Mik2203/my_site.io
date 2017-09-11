<?php
echo "Тест 1___________________________________________________<br>";

require ("app/classes/Loader.php");
//require ("../vendor/module/GoodRoom.php");

$loader = new app\Loader();

spl_autoload_register([$loader, 'loadClass']);


$myRoom = new app\Room;
echo  'Форма комнаты: ' . $myRoom->form . '<br>';
$myRoom->echoInfo();
echo '<br>' . $myRoom->getWindows();

echo "<br>_________________________________________________Тест 1<br>";

echo "Тест 2___________________________________________________<br>";

echo "<br>_________________________________________________Тест 2<br>";
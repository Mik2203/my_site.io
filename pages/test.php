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

=======
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

>>>>>>> cf1b4eaa64e2dc69babdc15d4e83899364111f26
echo "<br>_________________________________________________Тест 2<br>";
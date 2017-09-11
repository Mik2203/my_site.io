<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 06.09.2017
 * Time: 17:44
 */

require("views/header.php");

//var_dump($_GET); //var_dump - как и echo! Вывод на экран

$_GET += array('page' => null); // define

$pages = array("main", "cart", "ledenec", "about", "test");

// isset - определяет, установлена ли переменная.
if(isset($_GET['page']))
{
// -- Проверить, присутствует ли в массиве значение
    if (in_array(htmlspecialchars($_GET["page"]), $pages)) {
        include('pages/' . $_GET['page'] . '.php');
    } else {
        include('pages/error.php');
    }
}
else
{
    include("pages/error.php");
}

//switch ($_GET['page'])
//{
//    case 'main':
//        include ('pages/main.php');
//        break;
//
//    case 'cart':
//        include ('pages/cart.php');
//        break;
//
//    case 'ledenec':
//        include ('pages/ledenec.php');
//        break;
//
//    case 'about':
//        include ('pages/about.php');
//        break;
//
//    default:
//        include ('pages/error.php');
//        break;
//}

require("views/footer.php");


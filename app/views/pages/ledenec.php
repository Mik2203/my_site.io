<?php
$arr = array('led_1' => '../../../app/views/images/Led_1.jpg', 
    'led_2' => '../../../app/views/images/Led_2.jpg', 
    'error' => '../../../app/views/images/Led_not.jpg');

$arr2 = array('../../../app/views/images/Led_1.jpg', '../../../app/views/images/Led_2.jpg', '../../../app/views/images/Led_not.jpg');

//var_dump($arr['led']);
//echo "dg: ". $arr['led'] . "<br>";

//    foreach ($arr as $arr['led_1'] => $value) 
//    {
//        //echo 'Xmfgflll: ' . "$key = $value </br>";
//        if ($arr['led_1'] == 'led_1') 
//        {
//            echo "есть фото: " . $value  . "<br>";
//        } 
//        else 
//        {
//            echo "нет фото: " . $value  . "<br>";
//        }
//    }
    
    for ($i = 0; $i < count($arr2); ++$i)
    {
        if($arr2[$i] < $i)
        {
            echo "есть фото1: " . $arr2[$i]  . "<br>";
        }
        else
        {
            echo "нет фото1: " . $arr2[$i]  . "<br>";
        }
    }
    
//    $dirname = "app\\views\\images";
//    $dirh = opendir($dirname);
//if ($dirh) {
//    while (($dirElement = readdir($dirh)) !== false) {
//        echo 'что тут: ' . $dirh;
//
//    }
//    closedir($dirh);
//}
    
// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
//while ($fruit_name = current($arr)) 
//        {
//    if ($fruit_name == 'error') 
//        {
//        echo key($arr) . '<br />';
//    }
//    next($arr);
//}

//$filename = ['app/views/images/Led_0.jpg', 'app/views/images/Led_1.jpg', 'app/views/images/Led_2.jpg', 'app/views/images/Led_3.jpg'];

// for ($j = 1; $j < count($filename); ++$j) {
//    if (file_exists($filename[$j])) { 
//        //echo "Файл есть: $filename[$j]";
//        $HTML = '<img src = "'.$filename[$j].'" class="ledenec_item_led" alt="">';
//        print $HTML;
//    
//    } else {
//        $filename[$j] = 'app/views/images/Led_not.jpg';
//        echo "Нет файла:  $filename[$j]";
//    }
//}

//$filename = ['app/views/images/Led_0.jpg', 'app/views/images/Led_1.jpg', 'app/views/images/Led_2.jpg', 'app/views/images/Led_0.jpg'];
//for ($j = 1; $j < count($filename); ++$j) {
//        if ($i == $j) {
//            //echo 'for: ' . $i . $j;
//            if (file_exists($filename[$j])) {
//                echo "Файл есть: $filename[$j]";
//                
//            } else {
//                $filename[$j] = 'app/views/images/Led_not.jpg';
//                //echo "Нет файла:  $filename[$j]";
//            }
//        }
//   }
?>

<?
$filename = ['app/views/images/Led_0.jpg', 'app/views/images/Led_1.jpg', 'app/views/images/Led_2.jpg', 'app/views/images/Led_0.jpg'];
  for ($i = 1; $i <= 15; ++$i) 
{ 
 for ($j = 1; $j < count($filename); ++$j) {
        if ($i == $j) {
            //echo 'for: ' . $i . $j;
            if (file_exists($filename[$j])) {
                //echo "Файл есть: $filename[$j]";
                ?>
     <?$html = '<div class="ledenec_item_block_1">
        <div class="ledenec_item">
            <ul>
                <li>
                    <div class="item">
                        <p>леденец № <?= $i ?></p>
                        <img src = "<? = $filename[$j]?>" class="ledenec_item_led" alt="">
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>';?>
                
                <?print $html;?><?
                
            } else {
                $filename[$j] = 'app/views/images/Led_not.jpg';
                //echo "Нет файла:  $filename[$j]";
            }
        }
   }   
}?>

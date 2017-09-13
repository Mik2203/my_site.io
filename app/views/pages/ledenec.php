<?php
$arr = array('led' => '../../../app/views/images/Led_1.jpg', 
    'led' => '../../../app/views/images/Led_2.jpg', 
    'error' => '../../../app/views/images/Led_not.jpg');

//var_dump($arr['led']);
//echo "dg: ". $arr['led'] . "<br>";

    foreach ($arr as $key => $value) 
    {
        //echo 'Xmfgflll: ' . "$key = $value </br>";
        if ($arr['led'] == $key) 
        {
            echo "есть фото: " . $value  . "<br>";
           
        } 
        else 
        {
            echo "нет фото: " . $value  . "<br>";
             break;
        }
    }
 ?>



<?php for ($i = 1; $i <= 15; ++$i) { ?>
    <div class="ledenec_item_block_1">
        <div class="ledenec_item">
            <ui>
                <li>
                    <div class="item">
                        <p>леденец № <?= $i ?></p>
                        <img src = "<?=$value?>" id = "ledenec_item_led" alt="">
                    </div>
                </li>
            </ui>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php } ?>
<?php
$arr = array('led' <= '../../../app/views/images/Led_1.jpg', 'led' <= '../../../app/views/images/Led_2.jpg', 'error' <= '../../../app/views/images/Led_not.jpg');

//var_dump($arr['led']);

foreach($arr as $key => $value) 
  { 
     echo 'Xmfgflll: ' . "$key = $value <br>";
  } 

 for ($j = 0; $j < count($arr); ++$j)
 {
     if ($arr[$j]['led'] == 'led')
     {
         echo "path: " . $arr[$j][array_keys($arr)];
     } 
     else 
     {
         echo "path_not: " . $arr[$j][array_keys($arr)];
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
                        <!--<img src = "" id = "ledenec_item_led" alt="">-->
                    </div>
                </li>
            </ui>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php } ?>
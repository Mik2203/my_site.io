<?php 
$arr = array('"../../../app/views/images/Led_1.jpg"', '"../../../app/views/images/Led_2.jpg"');

for ($i = 1; $i <= 15; ++$i) 
{ ?>
<div class="ledenec_item_block_1">
    <div class="ledenec_item">
        <ui>
            <li>
                <div class="item">
                    <p>леденец № <?= $i; ?></p>
                    
                    <?phpfor ($j = 0; $j < count($arr); ++$j)
                    {?>

                        <?phpif($arr[$j] < 2)
                        {?>
                        <?php echo $arr[$j];?>
                        <?php}?>
                        <img src = $arr[$j] id = "header_logo" alt = "BestMebelShop-интернет магазин">
                       <?php }?>
                    
                </div>
            </li>
        </ui>
    </div>
    <div class="clearfix"></div>
</div>
 } 

<!--<?php
//echo "gdfg: " . (__DIR__) . '../images/cart.png';
?>-->
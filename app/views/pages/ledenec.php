<?php 
$arr = ['led' <= '"../../../app/views/images/Led_1.jpg"', 'led' <= '"../../../app/views/images/Led_2.jpg"', 'error' <= '"../../../app/views/images/Led_not.jpg"'];

 for ($j = 0; $j < count($arr); ++$j)
{
    if($arr[$j] == 'led')
    {
        echo "path: " . $arr[$j];
    }
    else 
    {
        echo "path_not: " . $arr[$j];
    }


<? for ($i = 1; $i <= 15; ++$i) { ?>
<div class="ledenec_item_block_1">
    <div class="ledenec_item">
        <ui>
            <li>
                <div class="item">
                    <p>леденец № <?= $i; ?></p>
                    <img src = "<?=$arr[$j]?>" id = "header_logo" alt = "BestMebelShop-интернет магазин">
                </div>
            </li>
        </ui>
    </div>
    <div class="clearfix"></div>
</div>
<?}?>
?>
<!--echo "gdfg: " . (__DIR__) . '../images/cart.png';-->
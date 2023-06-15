<?php
function getPriceWithDiscount($num)
{
    if ($num <= 1000) {
        return $num - ($num * 5 / 100);
    } else {
        return $num - ($num * 10 / 100);
    }
}
echo getPriceWithDiscount(500);
echo "<br>";
echo getPriceWithDiscount(1500);
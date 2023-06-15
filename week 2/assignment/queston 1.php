<?php
function factorial($num)
{
    if ($num == 0) return 1;
    return factorial($num - 1) * $num;
}
echo factorial(4);
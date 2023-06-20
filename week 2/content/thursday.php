<?php
// request


//session (temper) or files or db 

// get == URL == query string
// post or cookies





$arr = [0, 6, 5, 4, 2];
print_r(array_is_list($arr));
print_r($arr);

$x = 10;
function sum($x)
{
    $x++;
    echo $x;
}
echo sum($x); // 11
echo $x; //10
$xx = 10;
function summ(&$x)
{
    $x++;
    echo $x;
}
echo $xx;//11
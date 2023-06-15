<?php
function check_palin($s)
{
    $end = strlen($s) - 1;
    for ($i = 0; $i < strlen($s) / 2; $i++) {
        if ($s[$i] != $s[$end]) {
            return false;
        }
        $end--;
    }
    return true;
}

$str = "abba";
echo check_palin($str);
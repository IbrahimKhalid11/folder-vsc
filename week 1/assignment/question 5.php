<?php
echo "Divided by 3 : ";
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0) {
        echo $i;
        echo " , ";
    }
}
echo "<br>";
echo "Divided by 5 : ";
for ($i = 1; $i < 100; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo " , ";
    }
}
echo "<br>";
echo "Divided by 3 & 5 : ";
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i;
        echo " , ";
    }
}
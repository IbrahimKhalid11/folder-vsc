<?php
session_start();
function displayCart()
{
    if (empty($_SESSION['cart'])) {
        echo 'Your cart is empty.';
    } else {
        echo '<ul>';
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            $p = $_SESSION['cart'][$i];
            if ($i % 2 != 0) {
                echo "<img src=$p height=200 width=300 /><br>\n";
            } else {
                echo '<li>' . $_SESSION['cart'][$i]  . '</li>';
            }
        }
    }
    echo '</ul>';
}

displayCart();
unset($_SESSION["cart"]);

<?php
session_start();
if (isset($_POST['remove'])) {

    $index = $_GET['i'];
    echo $index;
    unset($_SESSION['cart']);


    header("location:display.php");
} else {
    header("location:display.php");
}
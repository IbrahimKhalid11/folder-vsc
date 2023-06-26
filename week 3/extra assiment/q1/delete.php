<?php
session_start();
if (isset($_POST['remove'])) {


    unset($_SESSION['cart']);


    header("location:display.php");
} else {
    header("location:display.php");
}

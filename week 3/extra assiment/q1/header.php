<?php
session_start();
if (isset($_POST["sub"])) {
    if (!isset($_SESSION['cart'])) {
        extract($_POST);
        $img = $_FILES['file'];
        $image_name = $img['name'];
        $tmp_name = $img['tmp_name'];
        $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $new_name = uniqid() . "." . $ext;
        move_uploaded_file($tmp_name, "upload/$new_name");
        $arr = [
            "title" => $title,
            "quantity" => $quantity,
            "price" => $price,
            "img" => $new_name,
            "rv" => null,

        ];
        $_SESSION['cart'] = $arr;
        var_dump($_SESSION['cart']);
        // echo $image_name;

    }
    header("location:display.php");
} else {
    header("location:product.php");
}
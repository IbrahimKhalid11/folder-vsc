<?php
if (isset($_POST["submit"])) {
    $image = $_FILES['file'];
    $image_name = $image['name'];
    $tmp_name = $image['tmp_name'];
    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $size = $image['size'] / (1024 * 1024);
    $errors = [];
    $arr = ["png", "jpg", "jpeg"];
    if ($image['error'] != 0) {
        $errors[] = "image not correct";
    } elseif ($size > 1) {
        $errors[] = "image large size";
    } else if (!in_array($ext, $arr)) {
        $errors[] = "choose correct image";
    }
    $newName = $_POST['name'] . "." . $ext;
    if (empty($errors)) {
        $images = scandir("upload/");
        foreach ($images as $name) {
            echo "<img src='upload/$name' height=200 width=300 /><br>\n";
        }
        move_uploaded_file($tmp_name, "upload/$newName");
    } else {
        print_r($errors);
    }
} else {
    header("loction:upload.php");
}
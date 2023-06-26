<?php
if (isset($_POST["submit"])) {

    $image = $_FILES['file'];
    $image_name = $image['name'];
    $tmp_name = $image['tmp_name'];
    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $size = $image['size'] / (1024 * 1024); //to convert byte to kilo to megabyte
    //vaildation (size , requried,ext)
    $errors = [];
    $arr = ["png", "jpg", "jpeg"];
    // required
    if ($image['error'] != 0) {
        $errors[] = "image not correct";
    } elseif ($size > 1) {
        $errors[] = "image large size";
    } else if (!in_array($ext, $arr)) {
        $errors[] = "choose correct image";
    }
    // random name to not same name
    $newName = uniqid() . "." . $ext;
    if (empty($errors)) {
        // upload 
        //                            name file if it far "../upload/$newName"
        move_uploaded_file($tmp_name, "../upload/$newName");
    } else {
        print_r($errors);
    }
} else {
    header("loction:in.php");
}



//$filepath = "images/" . $_FILES["file"]["name"];

// if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
// {
// echo "<img src=".$filepath." height=200 width=300 />";
// } 
// else 
// {
// echo "Error !!";
// }
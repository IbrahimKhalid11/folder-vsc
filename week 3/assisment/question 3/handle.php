<?php

if (isset($_POST["check"]) && isset($_POST["submit"])) {
    $background = $_POST['select'];
    setcookie('background', $background, time() + (86400 * 30));

    setcookie("password", $_POST["password"], time() + 60 * 60);
    setcookie("email", $_POST["email"], time() + 60 * 60);
    echo $background;
    // header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url(<?php echo  $background ?>);
    }
    </style>
</head>

<body>
    <?php echo $background; ?>
</body>

</html>
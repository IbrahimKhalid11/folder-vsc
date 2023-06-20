<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- isset (not must initilize)
     empty(must initilize) -->
    <?php
    // if (!empty($_GET['name']) && !empty($_GET['email'])) {
    //     // must catch value util after header in handlelogin
    //     $name = $_GET['name'];
    //     $email = $_GET['email'];
    //     echo "welcome $name your email is $email";
    // }
    $id = 1;
    ?>

    <!-- form always have(action , method , name) -->
    <!-- get -->
    <!-- <form action="handleLogin.php" method="get">
        <input type="text" name="name"  id=""><br>
        <input type="email" name="email" id=""><br>
        <button type="submit">login</button>

    </form> -->

    <!-- post -->
    <!-- V here enter value to GET with POST -->
    <form action="handleLogin.php?id=<?php echo $id ?>" method="post">
        <input type="text" name="name" id=""><br>
        <input type="email" name="email" id=""><br>
        <!-- name button to use isset in handlelogin -->
        <button type="submit" name=sub>login</button>

    </form>
</body>

</html>
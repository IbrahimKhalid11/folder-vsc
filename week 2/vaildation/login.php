<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php session_start();

    if ( !empty($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
            ?><div class="alert"><?php echo $error;
            ?></div><?php
        }

        unset($_SESSION["errors"]);
    }

    ?>
</head>

<body>
    <form action="handle.php" method="post" align="center"><br><br><br><br><br><br><label>Name</label><input type="text"
            name="name" placeholder="Name" value="<?php if (!empty($_SESSION['name'])) echo $_SESSION['name']; ?>"
            id=""><br><br><label>Email</label><input type="text" name="email" placeholder="Email"
            value="<?php if (!empty($_SESSION['email'])) echo $_SESSION['email']; ?>"
            id=""><br><br><label>Age</label><input type="number" placeholder="Age" name="age"
            id=""><br><br><label>Password</label><input type="password" placeholder="Password" name="password"
            id=""><br><br><label>Male</label><input type="radio" name="gender" value="male" checked
            id=""><br><br><label>Female</label><input type="radio" name="gender" value="female" id=""><br><br><button
            type="submit" name="submit">Login </button></form>
</body>

</html>
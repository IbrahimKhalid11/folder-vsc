<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
session_start();
if (!empty($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) { ?>
<div class="alert"><?php echo $error; ?></div>

<?php }
    // unset($_SESSION["errors"]);
}
?>

<form action="handle.php" method="post">
    <input type="text" name="name" value="<?php if (!empty($_SESSION['name'])) echo $_SESSION['name']; ?>" id=""><br>
    <input type="text" name="email" value="<?php if (!empty($_SESSION['email'])) echo $_SESSION['email']; ?>" id=""><br>
    <input type="number" name="age" id=""> <br>
    <input type="password" name="password" id=""><br>
    <input type="radio" name="gender" value="male" checked id=""><br>
    <input type="radio" name="gender" value="female" id=""><br>
    <button type="submit" name="submit"> Login </button>
</form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handle.php" method="post">
        <input type="email" name="email" id="" value="<?php if (!empty($_COOKIE["email"])) echo $_COOKIE["email"];    ?>"><br>
        <input type="password" name="password" id="" value="<?php if (!empty($_COOKIE["password"])) echo $_COOKIE["password"];    ?>"><br>
        <input type="checkbox" name="check" id=""><label> remember me</label><br>
        <h1>Change BG<br>
            <select name="select" id="">
                <option value="b.jpg">default</option>
                <option value="bg.jpg">background 1</option>
            </select>
            <button type="submit" name="submit">submit</button><br>

    </form>
</body>

</html>
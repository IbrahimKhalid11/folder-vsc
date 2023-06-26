<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>add a prodeuct</H1>
    <?php session_start(); ?>
    <form action="header.php" method="post" enctype="multipart/form-data">
        <h3>title</h3><input type="text" name="title" id="" placeholder="title"><br>

        <h3>quantity</h3><input type="text" name="quantity" id=""><br>
        <h3>img</h3><input type="file" name="file" id=""><br>
        <h3>price</h3><input type="text" name="price" id=""><br><br>
        <button type="submit" name="sub">submit</button>
    </form>
</body>

</html>
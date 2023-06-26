<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <?php $i = 0; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
                <th scope="col">image</th>
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $name => $val) { ?>
                <?php if ($name == "img") { ?>
                <td> <img src="upload/<?php echo $val ?> " alt="" width="50"></td>
                <?php } else if ($val == null) { ?>
                <form action="delete.php?i=<?php echo $i; ?>" method="post">
                    <td><button type="submit" name="remove" class="btn btn-danger">remove</button></td>
                </form>
                <?php } else { ?>
                <td><?php echo ($val); ?></td>
                <?php } ?>
                <?php }
                } ?>



                <?php
                unset($_SESSION['cart']); 
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>
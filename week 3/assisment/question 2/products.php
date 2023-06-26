<?php
session_start();
$products = array(
    "product1" => ['name' => 'camera', 'price' => 1000, 'image' => 'images/camera.jpg'],
    "product2" => ['name' => 'laptop', 'price' => 1500, 'image' => 'images/lap.jpg'],
);

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $_SESSION['cart'][] = $product_name;
    $_SESSION['cart'][] = $product_image;
}


?>
<h1>Products</h1>

<?php foreach ($products as $product) : ?>
    <div class="card">
        <img src="<?php echo $product['image']; ?>" class="card-img-top" width="300" height="300" alt="<?php echo $product['name']; ?>">
        <h5 class="card-title"><?php echo $product['name']; ?></h5>
        <p class="card-text"><?php echo $product['price']; ?></p>
        <form method="post">
            <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $product['image']; ?>">
            <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
<?php endforeach; ?>
<form action="cart.php" method="post">
    <button type="submit" name="cart" class="btn btn-primary">display your cart</button>
    <?php
    if (isset($_POST["cart"])) {
        header("location:cart.php");
    }
    ?>
</form>
<?php
// Check if the background cookie is set
if (isset($_COOKIE['background'])) {
    $background = $_COOKIE['background'];
} else {
    $background = 'default.jpg'; // Set a default background if the cookie is not set
}

// Update the background cookie if a new background value is submitted
if (isset($_POST['background'])) {
    $background = $_POST['background'];
    setcookie('background', $background, time() + (86400 * 30), '/'); // Set the cookie for 30 days
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Change Background with Cookies</title>
    <style>
    body {
        background-image: url(<?php echo $background; ?>);
    }
    </style>
</head>

<body>
    <h1>Change Background</h1>
    <form method="post" action="">
        <label for="background">Select background:</label>
        <select name="background" id="background">
            <option value="default.jpg">Default</option>
            <option value="bg.jpg">Background 1</option>
            <option value="background2.jpg">Background 2</option>
            <!-- Add more background options as needed -->
        </select>
        <button type="submit">Change</button>
    </form>
</body>

</html>
   <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION["id"] = 1003;
    }
    if (isset($_SESSION["id"])) {
        print_r($_SESSION);
    }

    ?>

   <body align="center">
       <form action="" method=" post">
           <input type="text" name="name" id="">
           <input type="submit" value="submit">
       </form>
   </body>
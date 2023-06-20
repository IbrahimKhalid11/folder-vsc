<?php
// cookie tempiture and not take array
$name = "ali";
$email = "a@a.com";
// create cookie
setcookie("name", $name, time() + 60 * 60);
setcookie("email", $email, time() + 60 * 60);

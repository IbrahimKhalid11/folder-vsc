<?php
echo $_COOKIE["name"];
echo "<br>";
echo $_COOKIE["email"];

//delete cookie
setcookie("name", null, time() - 60 * 60);
setcookie("email", null, time() - 60 * 60);

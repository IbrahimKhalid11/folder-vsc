<?php
// must read or wirte use start
session_start();
$name = "hello";
$email = "a@a.com";
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;


// delete session
//1. destroy (all data)
//2. unset()
unset($_SESSION["email"]);

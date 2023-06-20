<?php
if (isset($_POST['submit'])) {
    session_start();
    $name = trim(htmlspecialchars($_POST["name"]));
    $email = trim(htmlspecialchars($_POST["email"]));
    $password = trim(htmlspecialchars($_POST["password"]));
    $gender = trim(htmlspecialchars($_POST["gender"]));
    $age = trim(htmlspecialchars($_POST["age"]));

    //validation
    // name (required,string,100)
    $errors = [];
    if ($name == "") {
        $errors[] = "name is required";
    } elseif (!is_string($name)) {
        $errors[] = "name must be string";
    } elseif (strlen($name) > 100) {
        $errors[] = "name must be less than 100";
    }

    //email (required , string , 100)
    if ($email == "") {
        $errors[] = "email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "email not correct";
    } elseif (strlen($email) > 100) {
        $errors[] = "email must be less than 100";
    }

    //password (required - string - 6)
    if ($password == "") {
        $errors[] = "password is required";
    } elseif (!is_string($password)) {
        $errors[] = "password must be string";
    } elseif (strlen($password) < 6) {
        $errors[] = "password must be more than 6";
    }

    // age (requried , number , 60 ,18)

    if ($age == "") {
        $errors[] = "age is required";
    } elseif (!is_numeric($age)) {
        $errors[] = "age must be number";
    } elseif ($age < 18 || $age > 60) {
        $errors[] = "age must be less than 60 and more than 18";
    }

    // gender (requried , male , female)
    $arr = ["male", "female"];
    if ($gender == "") {
        $errors[] = "gender is required";
    } else if (!in_array($gender, $arr)) {
        $errors[] = "gender not found";
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        header("location:login.php");

        // print_r($errors);
    }
} else {
    header("location:login.php");
}
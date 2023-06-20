<?php
// if user want enter handlelogin direct (X) this false 
// to aviod must aviod by form 
if (isset($_POST['sub'])) {
    // get
    // print_r($_GET);
    // extract($_GET); // بتعمل قيم بنفس اسم name in form
    // $name=$_GET['name'];
    // $email=$_GET['email'];
    // extract($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];

    // if print remove header(); 
    // echo "welcome $name your email is $email" ;


    //after enter id with method (post)
    print_r($_GET);
    echo "<br>";
    print_r($_POST);
    echo "<br>";
    print_r($_REQUEST); // to print GET and POST order (notice skip repeat)



    //               name page which go    value which go with me عشان استخدم $_GET
    // header("location:login.php?name=$name&email=$email");
    //                          query string which write in URL
} else {
    header("location:login.php");
}

<?php
// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 0; $j < $i; $j++) {
//         echo '*';
//     }
//     echo "<br>";
// }


/////////////////////////////////////////////////////////
// FUNCTION 

// $f = "Ibrahim";
// $l = "Khalid";
// function full_name($first, $last)
// {
//     echo "$first $last";     ======= $first." ".last
// }
// full_name($f, $l);
///////////////////////////////////////////////////////////
//overloading
// مهم
// function sum($x, $y, $z = 0)
// {
//     echo $x + $y + $z;
// }
// sum(5, 4);
// sum(5, 4, 2);
////////////////////////////////////////////////////////////
// function ragex($b, $e)
// {
//     for ($i = $b; $i <= $e; $i++) {
//         echo $i . " ";
//     }
// }
// ragex(1, 10); // === ragex(y:10,x:1);

// function operation($x, $y, $op)
// {
//     switch ($op) {
//         case "sum":
//             echo $x + $y;
//             break;
//         case "sub":
//             echo $x - $y;
//             break;
//         case "div":
//             echo $x / $y;
//             break;
//         default:
//             echo $x * $y;
//             break;
//     }
// }
// operation(5, 4, "div");


$x = 1; //global scope ,page life time
// function sum(){
//     $y=2; //local ,function life time
// }

// ---> if want use global in function
// function sum()
// {
//     global $x;
//     $x++;
//     echo $x;
// }
// sum();
// sum();

// ---> if want use local in global ,make return
// function sum(){
// $y=2;
//     return $y;
// }

// ---> if want make local page life time which change with operation

// function sum()
// {
//     static $y = 2;
//     $y++;
//     echo $y;
// }
// sum(); //3
// sum();//4

////////////////////////////////////////////////

//array

// kinds : indexs && assoction && multidemisions

// count(name array);---->size;
// unset(array[index])--->delete;
// print_r(name array) == var_dump--->print all array

// indexs
$names = ["ali", "ahmed", "omer", "khalid"];
$flag = false;
for ($i = 0; $i < count($names); $i++) {
    if ($names[$i] == "osama") {
        echo "exist <br>";
        $flag = true;
    }
}
if ($flag == false) {
    $names[] = "osama";
}
print_r($names);

// assoc 
// key=>value and use foreach


// multi
$multi = [
    "product1" => [
        "name" => "laptop",
        "price" => 5000,
    ],
    "product2" => [
        "name" => "book",
        "price" => 50,
    ],
];
//create 
$multi["product1"]["title"] = "hp";
//read
foreach ($multi as $key => $value) {
    echo "$key : <br>";
    echo "<ul>";
    foreach ($value as $x => $y) {
        echo "<li> $x : $y </li>";
    }
    echo "</ul>";
    echo "<hr>";
}
// update
$multi["product1"]["price"] = 5200;
foreach ($multi as $key => $value) {
    echo "$key : <br>";
    echo "<ul>";
    foreach ($value as $x => $y) {
        echo "<li> $x : $y </li>";
    }
    echo "</ul>";
    echo "<hr>";
}
//delete
unset($multi["product1"]["title"]);
foreach ($multi as $key => $value) {
    echo "$key : <br>";
    echo "<ul>";
    foreach ($value as $x => $y) {
        echo "<li> $x : $y </li>";
    }
    echo "</ul>";
    echo "<hr>";
}

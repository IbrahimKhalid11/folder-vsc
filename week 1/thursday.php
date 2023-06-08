<!-- subject :-operation && const && condition && loop -->


<!-- jit is interpreted and comiler -->
<!-- 
    #type juggling

$x="10";
$y=5;
echo $x+$y; return 15

$x="h10";
$y=5;
echo $x+$y; return error

$x="10h";
$y=5;
echo $x+$y; return 15 and error

    #type casting
$x=(int)"10"
convert type to type
-->






<?php
$x="10";//assignment
$y=5;
// 1.Arithmetic operators
$z=$x+$y;
// echo $z;
// 2.Assignment operators
$x=$y;
$x=$x+$y;
$x+=$y;
// 3.comparison operators
// var_dump($x<=>$y);//1 if x>y , -1 if y>x ,0 if ==
//$x==$y --->values if x is string the important value
// $x===$y --> value and datatypes

// 4.Increment / Decrement operators
$x=10;
$y=5;
// $x++ ,y-- post
// ++$x,--y pre
// echo $z=++$x + --$y  x=11, y=4 ,z=15
// echo $z=$x-- + --$y  x=11, y=3 ,z=14
// echo $z=$x++ + --$y  x=10, y=2 ,z=12
// echo $z=$x++ + $y--  x=11, y=2 ,z=13
// echo $z=$x++ + ++$y  x=12, y=2 ,z=14
// x=13 ,y=2


// 5.Logical operators
// var_dump($x==10 xor $y==5) // false

// 6. String operators 
$name ="ahmed";
$lname="ali";
$name .=" $lname";
// echo $name;

// const (case sensitive ,not override,upper case)
//--define the const--
//1 const
const TYPE="user";
// echo TYPE;
// echo "<br>";
// 2.define()
define("NAME","ahmed");
// echo NAME;

// echo __LINE__;//build const


// condition 
// 1. if (== or === or .... (multi variable))
// switch ( single variable)  switch(name var) or switch (true)  case  condition or key :
// match (=== and return and must put ; in the end)
// match(){
//     condition or key => Value;
//      condition or key => Value;
//     defalut => value
// };
// echo "<br>";
// grade

// $grade=70;
// if($grade<50)echo "fail";
// else if($grade>=50 and $grade <65){
//     echo "success";
// }
// else if($grade>=65 and $grade <75){
//     echo "good";
// }else if($grade>=75 and $grade <85){
//     echo "very good";
// }else if($grade>=85 and $grade <=100){
//     echo "excellent";
// }
// else{
//     echo "error";
// }

// loop (for ,while , do while();)


// sub matrix
$right =1;
while($right<=12){
    $left = 1;
    while($left<=12){
        echo "$right * $left = ".$left*$right . "<br>";
        $left++;
        
    }
    echo "<hr>";
    $right++;
}
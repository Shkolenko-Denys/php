<?php

// variables

$name = "Denys";
$age = 10;
$bool = true;
echo "I am $name!<br>";
$id = 123;
echo "id = $id<br>";
$id = "one two three";
echo "id = $id<br>";
$x_age = "age";
echo $x_age;
echo ${$x_age};
echo "<br>";

// string functions

echo strlen("Hello world!") . "<br>";
echo str_word_count("Hello world!") . "<br>";
echo strrev("Hello world!") . "<br>";
echo strpos("Hello world!", "world") . "<br>";
echo str_replace("world", $name, "Hello world!") . "<br>";

// foreach loop through an associative array

$laptops = array("Denys"=>"Dell", "Ivan"=>"MacBook Pro", "Petro"=>"Lenovo");
foreach($laptops as $key => $val) {
    echo "$key: \"$val\"<br>";
}

// explode() function

$str = "One Two Three Four";
print_r(explode(" ", $str));
echo "<br>";
$str = "one,two,three,four";
print_r(explode(",", $str, 2));
echo "<br>";
print_r(explode(",", $str, -1));
echo "<br>";

// implode() function

$arr = array("One", "Two", "Three", "Four");
echo implode(" ", $arr) . "<br>";
echo implode("+", $arr) . "<br>";

// comparison

$a = 5;
$b = "5";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";

// type manipulation

$x = "1";
echo $x . "<br>";

$x *= 2;
echo $x . "<br>";

$x = $x * 1.2;
echo $x . "<br>";

$x = 5 * "10 number";
echo $x . "<br>";

$x = "car";
echo $x . "<br>";

$x[0] = "b";
echo $x . "<br>";

$bool = (boolean) $x;
echo $bool . "<br>";
<?php

$name = "не вказано";
$phone_number = "не вказано";

if (isset($_POST["name"])){
    $name = $_POST["name"];
}

if(isset($_POST["phone_number"])){
    $phone_number = $_POST["phone_number"];
}

echo "Дякуємо, $name! Ми Вам зателефонуємо за номером $phone_number найближчим часом!";
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>functions</h2>
<?php

 //defining a function
 function writeMessage(){
    echo "you are really god person";
 }

//call de function

writeMessage();

echo "<hr/>";

writeMessage();


// functions with parameters

function addFunction($num1, $num2){
    $sum = $num1 + $num2;
    $num2 = $num2 + 1;
    echo "the sum of $num1 and $num2 is: $sum <br/>";
}

function changeNum(&$num){
$num = $num + 10;
//num+= 10;
}

function returnProduct($num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
}

$num = 500;
addFunction(10,20);
echo $num;
addFunction(10, $num);

changeNum($num);
echo "$num . <br/>";

$return_value = returnProduct(10, 200);
echo "$return_value";
?>

<?php
require 'incluides/footer.php'
?>
<?php
//Arithmetic operators
$num1=5;
$num2=20;
echo $num1 + $num2;
echo "<br>";
echo $num1 / $num2;
echo "<br>";
echo $num1 * $num2;
echo "<br>";
echo $num1 - $num2;
echo "<br>";
echo $num1 % $num2;//Remainder
echo "<br>";

//Assignment operators
$num3=10;
$num4=10;

//Comparison operators
var_dump($num3==$num4);
echo "<br>";
var_dump($num3===$num4);
echo "<br>";

//Logical operators
var_dump($num1 and $num2);
echo "<br>";
var_dump($num4 && $num3);
echo "<br>";
var_dump($num1 xor $num3);
echo "<br>";
var_dump($num2 or $num1);
echo "<br>";
var_dump($num1 || $num4);
echo "<br>";
var_dump(!$num1);
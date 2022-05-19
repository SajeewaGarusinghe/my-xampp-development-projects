<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/
$age=22222222;
//echo $age;


// Declare variables
$name = "Zura";
//$age = 28;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';
echo $age.'<br>44444';

// Print types of the variables
echo gettype($name) . '<br>';
//echo gettype($age) . '<br>';
echo gettype($age).'<br>777777';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
echo "floowing id th var dump<br>";
var_dump($name,$age,$isMale,$height,$salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions

echo "Variable checking functions<br><br>";
echo is_string($name) . '<br>'; // false
echo is_int($age). '<br>'; // true
echo is_bool($isMale). '<br>'; // true
echo is_double($height). '<br>'; // true

// Check if variable is defined
echo "Check if variable is defined<br><br>";
var_dump(isset($name)).'<br>';
var_dump(isset($name2)).'<br>';
echo '<br>';

// Constants
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Using PHP built-in constants
echo SORT_ASC.'tag<br>';
echo PHP_INT_MAX.'<br>';

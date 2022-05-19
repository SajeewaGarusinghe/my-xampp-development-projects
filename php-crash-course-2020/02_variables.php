<?php

// What is a variable

// Variable types
$name='sajeewa1';
$age=12;
$isName=false;
$height=1.56;
$salary=null;

echo $name.'<br>';
echo $isName.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Declare variables

// Print the variables. Explain what is concatenation

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($isName).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';




// Print the whole variable
var_dump($name,$isName,$height,$salary);
// Change the value of the variable
$name=23;
// Print type of the variable
echo gettype($name).'<br>';
echo 'is string<br>';
// Variable checking functions
echo is_string($name).'<br>';
echo is_bool($isName).'<br>is set >>>';
// Check if variable is defined
echo isset($name);
// Constants
define('PI',3.14);
echo '<br>PI='.PI.'<br>';
// Using PHP built-in constants
echo PHP_INT_MAX;
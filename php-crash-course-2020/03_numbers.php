<?php

// Declaring numbers
$num1=12;
$num2=10;
echo $num1.'<br>';
// Arithmetic operations
echo $num1+$num2.'<br>';
// Assignment with math operators

// Increment operator
echo ++$num1;
// Decrement operator
//echo --$num2;
echo '<br>';
// Number checking functions
$state=is_integer(34.9);
echo "$state<br>";
// Conversion
$x=(float)123.37;
echo $x."<br>";
var_dump($x);
echo '<br>';

// Number functions

// Formatting numbers
echo number_format(123456.789,2,'.',',');
// https://www.php.net/manual/en/ref.math.php

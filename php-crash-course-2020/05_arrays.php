<?php

// Create array
$a=[1,2,3,4,5];
echo '<pre>';
var_dump($a);

$b=[111,222,333,4,5];
var_dump($b);
echo '</pre>';
// Print the whole array
echo $a[0];
// Get element by index
$a[4]=45;
echo '<pre>';
var_dump($a);
// Set element by index

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($a[2]));
echo '</pre>';
// Append element
echo '<pre>';
array_push($a,'text');
var_dump($a);
echo '</pre>';
// Print the length of the array
echo count($a);
// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array
$str="sajeewa,geethan,praneetha,ummi";

echo var_dump(explode(",",$str));
// Split the string into an array
$shoes=['bata','dsi','nike','cat'];
echo '<pre>';
var_dump(implode("_",$shoes));
echo '</pre>';

// Combine array elements into string

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $shoes));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("dsi", $shoes));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($shoes, $vegetables));
var_dump([...$shoes, ...$vegetables]); // Since PHP 7.4
echo '</pre>';

// Sorting of array (Reverse order also)
sort($shoes); //sort, rsort
echo '<pre>';
var_dump($shoes);
echo '</pre>';
//Search element index in the array

//Merge two arrays

//Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays
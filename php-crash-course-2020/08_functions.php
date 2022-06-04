<?php
function add(...$num)
{
    // echo '<pre>';
    // var_dump($num);
    // echo '</pre>';
    $total = 0;
    foreach ($num as $n) {
        $total += $n;
    }
    return $total;
};
echo add(1, 2, 3, 4, 5, 6, 7, 8, 9);
?>



<!-- // Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums

// Arrow functions -->
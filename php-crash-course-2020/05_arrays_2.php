<?php
$as=[
'name'=>'sajeewa',
'city'=>'matara',
'id'=>'920',
'hobbies' => ['Tennis', 'Video Games'],
];
echo $as['name'];
$as['job']='Engineer';

if(!isset($as['address'])){
    $as['address']='unknown';

}

echo '<pre>';
var_dump($as);
echo '</pre>';


$as['address'] ??= 'Unknown';
echo $as['address'].'<br>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($as));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($as));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($as); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($as);
echo '</pre>';


?>
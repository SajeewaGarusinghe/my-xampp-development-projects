<?php
$text='Hellow-world';
//echo $text.'<br>';
// Create simple string
$text=$text.'May 2022';
//echo $text;
// String concatenation
$string = "<      Hello World      >";

// echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
// echo "2 - " . trim($string) . '<br>' . PHP_EOL;
// echo '<<<<<<<<<<<<<<<<<<<<<br>';
//  echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
//  echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
//  echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
//  echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
//  echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
//  echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
//  echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
//  echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
//  echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
//  echo "12 - " . strpos($string, 'World') . '<br>' . PHP_EOL; // Change into world
//  echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
//  echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
//  echo "15 - " . str_replace('world', 'PHP', $string) . '<br>' . PHP_EOL;
//  echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

 $invoiceNumber = 100;
 $invoiceNumber2 = 123456;
 echo str_pad($invoiceNumber, 8, '_', STR_PAD_RIGHT) . '<br>' . PHP_EOL;
 echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
 echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;

// String functions
$longText='this is multi
line paragraph
and can be used as 
fuck   ';

echo $longText.'<br>'.PHP_EOL;
echo nl2br($longText).'<br>'.PHP_EOL;

echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
 echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
 echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php
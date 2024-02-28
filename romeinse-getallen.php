<?php

function integerToRoman($integerValue)
{
 // Convert the integer into an integer (just to make sure)
 $integerValue = intval($integerValue);
 $resultInteger = '';
 
 // Create a lookup array that contains all of the Roman numerals.
 $lookupInteger = array('M' => 1000,
 'CM' => 900,
 'D' => 500,
 'CD' => 400,
 'C' => 100,
 'XC' => 90,
 'L' => 50,
 'XL' => 40,
 'X' => 10,
 'IX' => 9,
 'V' => 5,
 'IV' => 4,
 'I' => 1);
 
 foreach($lookupInteger as $number => $roman){
  // Determine the number of matches
  $matchesInt = intval($integerValue/$roman);
 
  // Add the same number of characters to the string
  $resultInteger .= str_repeat($roman,$matchesInt);
 
  // Set the integer to be the remainder of the integer and the value
  $integerValue = $integerValue % $roman;
 }
 
 // The Roman numeral should be built, return it
 return $resultInteger;
}

function romanToInteger($romanValue)
{
    $num = intval($romanValue);
    $resultRoman = '';

    $lookupRoman = array('M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1);

    foreach ($lookupRoman as $roman => $number) {
        $matchesRom = intval($num/$number);
        $resultRoman .= str_repeat($roman,$matchesRom);
        $num = $num % $number;
    }
    return $resultRoman;
}

echo integerToRoman(100) . PHP_EOL;
echo romanToInteger(100) . PHP_EOL;

?>
<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

*/
//Given an array, find the int that appears an odd number of times.
function findIt(array $seq) : int{
    $intArr = array();
    foreach($seq as $ele){
        if(array_key_exists($ele, $intArr)){
            $intArr[$ele] += 1;
        }
        else{
            $intArr[$ele] = 1;
        }
    }
    foreach($intArr as $int => $intCount){
        if($intCount % 2 === 1){
            return $int;
        }
    }
}
//Write a function that takes an integer as input,
//and returns the number of bits that are equal to one in the binary representation of that number.
function countBits($n){
   $binInt = decbin($n);
   $binArr = str_split($binInt);
   $count = 0;
   for($i=0;$i<count($binArr);$i++){
     if($binArr[$i] === '1'){
       $count += 1;
      }
    }
  return $count;
}
//A Narcissistic Number is a number which is the sum of its own digits,
//each raised to the power of the number of digits in a given base.
function narcissistic(int $value): bool {
$arr = str_split("$value",1);
  $sum = 0;
  foreach($arr as $entry){
    $sum = $sum + intval($entry)**(count($arr));
      echo $sum . ' ';
  }
  if($sum === $value){
    return true;
  }
  else{
    return false;
  }
}
//Create a function named divisors/Divisors that takes an integer n > 1 and
//returns an array with all of the integer's divisors(except for 1 and the number itself),
//from smallest to largest. If the number is prime return the string '(integer) is prime
function divisors($integer) {
  if($integer > 1){
    $arr = array();
    for($i=2; $i<$integer; $i++){
      if($integer % $i === 0){
        array_push($arr, $i);
      }
    }
    if(count($arr) > 0){
      return $arr;
    }
    else{
      return "$integer" . ' is prime';
    }
  }
}

//Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"
//Jaden-Cased:     "How Can Mirrors Be Real If Our Eyes Aren't Real"
function toJadenCase($string)
{
   return ucwords($string);
}

function multiply($a, $b) {
  return $a * $b;
}
?>

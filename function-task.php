<?php
// step1: define a function and make it return a calculation of 2 number
function calculation($number1, $number2)
{
    $sum = $number1 + $number2;
    return $sum;
}
 $add = calculation(23,33);
 echo $add;
 echo '<br>';
 //step2: make a function that passes parameter and call it using parameter values
 function display($message)
 {
    echo $message;
 }
 display("hello");
?>
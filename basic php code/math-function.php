<?php
//MATH FUNCTIONS
echo rand(1,100);
  //echo $rand;
 echo '<br>';
 echo sqrt(100);
 echo '<br>';
 echo ceil(5.6);
 echo '<br>';
 echo round(7.4);
 echo '<br>';
 
 //STRING FUNCTIONS
 echo '<br>';
 $string = "hello students do you like the class";
  echo strlen($string);
  echo '<br>';
  echo strtoupper($string);
  echo '<br>';
  echo strtolower($string);
  echo '<br>';
  
  //ARRAY FUNCTIONS
  $list = array(23,54,10,98,67,98);
  echo max($list);
  echo '<br>';
  echo min($list);
  echo '<br>';
  sort($list);
  print_r($list);
 
?>
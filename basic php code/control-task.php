<?php
//make an if statment with else if and else to finally display string saying, i love php
if(4<5)
{
    echo "i love php";
}
else if(5>9)
{
    echo "i love php";
}
else{
    echo "i love php";
}
//display 10 number
for($number =0; $number<10;$number++)
{
    echo '<br>';
    echo $number;
}
echo"<br>";
//make a switch statement that test against one condition with five cases
$counter = 10;
switch($counter)
{
    case 10:
    echo " it is 10";
    break;
    case 11:
    echo "it is 11";
    break;
    case 12:
    echo "it is 12";
    break;
    case 13:
    echo "it is 13";
    break;
    case 14:
    echo "it is 14";
    break;
    default:
    echo "we could not find anything";
    break;
}



?>
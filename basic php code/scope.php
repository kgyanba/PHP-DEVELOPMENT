<?php
$x = "outside";//global variable means a variable which declare outside the function
function add()
{
    //global $x;//if we want to change the value of local variable the we need to use the global keyword through out the whole script
    $x = "inside";// local variable means a variable which declare inside the function 
    
}
echo $x;
echo '<br>';
add();
{
    echo $x;
}

?>
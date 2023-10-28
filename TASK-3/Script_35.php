<?php
/* Write a PHP script to shuffle the elements of an array using the shuffle() function */


$color = array("red","green","blue","yellow","purple");

shuffle($color);
print_r($color);

//Output:Array ( [0] => yellow [1] => blue [2] => red [3] => purple [4] => green )
?>
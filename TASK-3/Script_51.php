<?php
/*  Create a PHP script that adds elements to an associative array using the array_push() 
function. */

$color=array("Red","Green","Blue");
array_push($color,"Black","white");
print_r($color);

//Output:Array ( [0] => Red [1] => Green [2] => Blue [3] => Black [4] => white )
?>
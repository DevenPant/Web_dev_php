<?php
/*  Write a PHP script that removes duplicate values from an associative array using the 
array_unique() function */

$Fruits=array("Apple","Apple","Mango","mango","Mango","Watermallon","Banana");
$Uniquearray=array_unique($Fruits);
print_r($Uniquearray);


//Output:Array ( [0] => Apple [2] => Mango [3] => mango [5] => Watermallon [6] => Banana )

?>
<?php
/*  Develop a PHP script to split an array into chunks of a specified size using the 
array_chunk() function. */

$Fruits=array("Apple","MAngo","Banana","Papaya","Watermalon");
print_r(array_chunk($Fruits,3));

//Output:Array ( [0] => Array ( [0] => Apple [1] => MAngo [2] => Banana ) [1] => Array ( [0] => Papaya [1] => Watermalon ) )

?>
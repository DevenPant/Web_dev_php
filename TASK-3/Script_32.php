<?php
/*  Write a PHP script to merge two arrays using the array_merge() function and display the 
combined result */

$col1=array("red","green");
$col2=array("Blue","Black");
print_r(array_merge($col1,$col2));

//Output:Array ( [0] => red [1] => green [2] => Blue [3] => Black )


?>
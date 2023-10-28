<?php
/*  Develop a PHP script to merge two associative arrays using the array_merge() function 
and display the combined result. */


$color1=array("Red","Green","Blue");
$color2=array("Black","Whaite");
print_r(array_merge($color1,$color2));

//Output:Array ( [0] => Red [1] => Green [2] => Blue [3] => Black [4] => Whaite )

?>
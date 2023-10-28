<?php
/*  Write a PHP script that applies a user-defined function to all elements of an array using 
the array_map() function. */

function myfunction($num)
{
  return($num*$num);
}

$no=array(4,5,6,8,7);
print_r(array_map("myfunction",$no));

//Outpuut:Array ( [0] => 16 [1] => 25 [2] => 36 [3] => 64 [4] => 49 )

?>
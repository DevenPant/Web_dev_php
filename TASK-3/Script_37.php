<?php
/* Develop a PHP script that uses the array_push() function to add elements to an array and 
the array_pop() function to remove elements from the end. 

//array_push()
$Subject = array("DEA","MATH","PHP","C#");
echo "Add element : Html, Android"  ;
array_push($Subject,"HTML","ANDROID");
print_r($Subject);

//Output:Add element : Html, AndroidArray ( [0] => DEA [1] => MATH [2] => PHP [3] => C# [4] => HTML [5] => ANDROID )

*/
//array_pop()225522
$myArray = [1, 2, 3, 4, 5];
$lastElement = array_pop($myArray);
echo "Removed element: " . $lastElement . "\n";
print_r($myArray);
// Output: Removed element: 5 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
?>
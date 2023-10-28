<?php
/*  Develop a PHP script to extract the keys from an associative array using the array_keys() 
function. */

$student = array(
    "First_name" => "Shaban",
    "Last_name" => "Khan",
    "Age" => 20,
);

$keys =array_keys($student);
echo "keys from an associative array";
print_r($keys);

//Output:keys from an associative arrayArray ( [0] => First_name [1] => Last_name [2] => Age )

?>
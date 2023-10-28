<?php
/*  Write a PHP script to extract the values from an associative array using the array_values() 
function. */

$student = array(
    "First_name" => "Shaban",
    "Last_name" => "Khan",
    "Age" => 20,);

    print_r(array_values($student));

    //Output:Array ( [0] => Shaban [1] => Khan [2] => 20 )

?>
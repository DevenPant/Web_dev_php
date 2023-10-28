<?php
/*  Create a PHP script that extracts a specific column from a multidimensional array using 
the array_column() function. */

$a = array(
    array(
      'id' => 101,
      'first_name' => 'DEVEN',
      'last_name' => 'PANT',
    ),
    array(
      'id' => 4767,
      'first_name' => 'JAY',
      'last_name' => 'KANANI',
    ),
    array(
      'id' => 3809,
      'first_name' => 'SHREY',
      'last_name' => 'PATEL',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

//Output:Array ( [0] => PANT [1] => KANANI [2] => PATEL )
?>

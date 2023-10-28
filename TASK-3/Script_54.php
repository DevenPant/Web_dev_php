<?php
/*  Create a PHP script that extracts a specific column from a multidimensional array using 
the array_column() function. */

$a = array(
    array(
      'id' => 101,
      'first_name' => 'avani',
      'last_name' => 'viramgama',
    ),
    array(
      'id' => 4767,
      'first_name' => 'jay',
      'last_name' => 'kanani',
    ),
    array(
      'id' => 3809,
      'first_name' => 'manth',
      'last_name' => 'Patel',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

//Output:Array ( [0] => viramgama [1] => kanani [2] => Patel )
?>
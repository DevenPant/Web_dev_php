<?php
/*  Create a PHP script that flips the keys and values of an associative array using the 
array_flip() function */

$color=array("a"=>"green","b"=>"black","c"=>"blue","d"=>"yellow");
$result=array_flip($color);
print_r($result);

//Output:Array ( [green] => a [black] => b [blue] => c [yellow] => d )


?>
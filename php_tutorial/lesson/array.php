<?php
// ARRAY FUNCTION HELP US TO INTERRACT AND MANIPULATE AN ARRAY
$fruits =[ 'orange', 'apple', 'mangoes', 'pear', 'tigre nut', 'date fruit'];
// COUNT HELP US TO KNOW THE NUMBER THE OF ARRAY 
echo count($fruits);
echo in_array ('pear', $fruits);
// array_push add items to the array
// the difference between the push and the in_array is that the array push add items
echo array_push($fruits, 'pawpaw', 'guava');
print_r ($fruits);
echo array_unshift($fruits,'sugar');
//  array_unshift add an item to the beginining of an array

// Array pop removes the last item 
echo array_pop($fruits);


// array_shift removes the first item in your array

echo array_shift($fruits);
echo "<br>";
// UnSet removes specific elements from the array
unset($fruits [4]);
print_r ($fruits);
echo "<br>";
$array1 = [1,2,3];
$array2= [4,5,6];
$array3 = array_merge($array1, $array2);
var_dump($array3);
// array merge is use to concatnate or join two array together 

?>

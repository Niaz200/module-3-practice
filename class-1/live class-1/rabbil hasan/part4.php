<?php
//Array Creation and Manipulation functions


//array()- Creates an array
// // code1:

// $arr=array("A","B","C");
// print_r($arr);

// // code2:
// //array_values() - Returns all the values from the array
/*
$person1 = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

$value=array_values($person1);
print_r($value);

*/

// code2:
//array_keyvalues() - Returns all the keys from the array

/*
$person1 = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

$key=array_keys($person1);
print_r($key);

*/


// code3:

// array_combine() - Combines two arrays: one for keys and the other for values.

/*
$keys = array("a", "b", "c");
$values = array("apple", "ball", "cat");
$combine = array_combine($keys, $values);

print_r($combine );

*/

// code4:

// array_fill() - Fills an array with values.

/*
$filled = array_fill(0, 3, "OSTAD");
print_r($filled);

*/

// code5:

// array_push() - Adds one or more elements to the end of an array.

/*
$country = array("Bangladesh", "India");
array_push($country, "Canada", "Thailand");
print_r($country);

*/

// code6:

// array_pop() - Removes the last element from an array.

/*

$fruits = array("apple", "banana", "cherry");
array_pop($fruits);

print_r($fruits);

*/

// code7:

// array_unshift() - Adds one or more elements to the beginning of an array.

/*

$fruits = array("apple", "orange","mango", "cherry");
array_unshift($fruits, "jackfruit");

print_r($fruits);

*/

// code8:

// array_shift() - Removes the first element from an array.

/*
$fruits = array("apple", "orange","mango", "cherry");
array_shift($fruits);

print_r($fruits);

*/

// code9:

// array_splice() - Removes a portion of the array and replaces it with something else.


$fruits = array("apple", "orange","mango", "cherry");
array_splice($fruits, 1, 2,['demo,demo']);

print_r($fruits);



// code9a:

// array_splice() - Removes a portion of the array and replaces it with something else.

/*
$fruits = array("apple", "orange","mango", "cherry");
array_splice($fruits, 1, 2, array("fig", "grape"));

print_r($fruits);

*/

// code10:
//array_slice() - Extracts a portion of the array.

/*
$fruits = array("apple", "orange","mango", "cherry");
$portion = array_slice($fruits, 0, 2);

print_r($portion);

*/

?>
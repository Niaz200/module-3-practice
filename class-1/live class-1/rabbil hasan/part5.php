<?php

// Array Information Functions


// count() - Counts the number of elements in an array.

// code1:

/*

$arr = array("A", "B", "C", "D");

echo count($arr);

*/

//sizeof() - An alias of count(). Also counts the number of elements in an array.
// code2:

/*

$arr = array("A", "B", "C", "D");

echo sizeof($arr);

*/

// array_sum() - Computes the sum of values in an array.
// code3:

/*

$arr = [1, 2, 3, 4, 5, 6];
$sum = array_sum($arr);

echo $sum;

*/


//array_product() - Computes the product of values in an array.

// code4:

/*

$arr = [1, 2, 3, 4, 5, 6];
$product = array_product($arr);

echo $product;

*/



// in_array() - Checks if a value exists in an array.

// code5:

/*

$arr = [1, 2, 3, 4, 5, 6];
$check = in_array(3, $arr);

echo $check;

*/

// code6:

/*

$arr = [1, 2, 3, 4, 5, 6];
$check = in_array(3, $arr);

if($check){
    echo "3 found";
}else{
    echo "3 Not found";
}

*/

// code7:

/*

$arr = [1, 2, 4, 5, 6];
$check = in_array(3, $arr);

if($check){
    echo "3 found";
}else{
    echo "3 Not found";
}

*/

// is_array() - Checks if a variable is an array.

// code8:

/*

$arr = [1, 2, 3, 4, 5, 6];
$check = is_array($arr);

echo $check;

*/


//array_key_exists() - Checks if a key exists in an array.

// code9:

/*

$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

$check = array_key_exists("age",$person);

echo $check;

*/


//array_search() - Searches the array for a given value and returns the first corresponding key.

// code10:

$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

$searchKey = array_search("OSTAD",$person);

echo $searchKey;


?>
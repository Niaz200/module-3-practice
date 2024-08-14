<?php

// Array Transformation Functions



// array_column() - Returns the values from a single column of the input array.

//code1:

/*

$arr=[
    ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
    ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
    ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

];

$firstName = array_column($arr, 'firstName');

print_r($firstName);

*/


//code2:

/*

$arr=[
    ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
    ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
    ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

];

$firstName = array_column($arr, 'lastName');

print_r($firstName);

*/

//code3:

/*

$arr=[
    ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
    ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
    ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

];

$firstName = array_column($arr, 'age');

print_r($firstName);

*/

// array_flip() - Exchanges all keys with their associated values in an array.

//code4:

/*



$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

$personFlip = array_flip($person);

print_r($personFlip);

*/



//array_replace() - Replaces values from one array to another.

//code5:

/*

$fruits = array("apple", "orange","mango", "cherry");
$newItem=array(0=>'komla','2'=>"AAM");
$replaced=array_replace($fruits,$newItem);

print_r($replaced);

*/


// array_merge() - Merges one or more arrays.

//code6:

/*

$arr1=[1,2,3,4];
$arr2=[5,6,7,8];
$arr3=[9,10,11,12];

$merge=array_merge($arr1,$arr2,$arr3);

print_r($merge);

*/

// array_filter() - Filters elements of an array using a callback function.

//code7:

/*

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function even($n) {
    return $n % 2 == 0;
}

$evenNum = array_filter($numbers, 'even');
print_r($evenNum);

*/


//code7a:

/*

$numbers = array(0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function even($n) {

    if($n!=0){
        return $n % 2 == 0;
    }
    
}

$evenNum = array_filter($numbers, 'even');
print_r($evenNum);

*/



//code8:

/*


$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function odd($n) {
    return $n % 2 != 0;
}

$oddNum = array_filter($numbers, 'odd');
print_r($oddNum);

*/



// array_map() - Applies a callback function to the elements of one or more arrays.

// code9:

/*

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function add10($n) {
    return $n+10;
}

$reshaped = array_map('add10',$numbers);

print_r($reshaped);

*/


// code10:

/*

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function add10($n) {
    return ($n+10) * ($n+10);
}

$reshaped = array_map('add10',$numbers);

print_r($reshaped);

*/


// code11:

/*

$bdt = array(100, 132, 13, 554, 555, 600, 700, 800, 978, 101);

function doller($n) {
    return $n/104;  //1 doller = 104 taka
}

$bdtToDoller = array_map('doller',$bdt);

print_r($bdtToDoller);

*/


?>
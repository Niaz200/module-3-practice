<?php

//Multidimensional Arrays
// // $arr1=[1,2,3];
// // $arr2=[4,5,6];
// // $arr3=[7,8,9];

// $arr=[
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];


//how to create

// //code1:
// $arr=[
//     ['a','b','c'],  // 0 child
//     ['d','e','f'],  // 1 child
//     ['g','h','i']   // 2 child

// ];

// // Accessing Values

// echo $arr[2][1];


// //code2:
// $arr=[
//     ['a','b','c'],  // 0 child
//     ['d','e','f'],  // 1 child
//     ['g','h','i']   // 2 child

// ];



// print_r($arr);

// //code3:
// //multi dimensional associative array

// $arr=[
//     ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
//     ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
//     ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

// ];

// echo $arr[2]['firstName'];
// echo $arr[2]['lastName'];


// //code4:

// //ForEach Loop through an Multidimensional array

// $arr=[
//     ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
//     ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
//     ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

// ];


// foreach($arr as $child){
//     foreach($child as $key=>$value){
//         echo "$value <br/>";
//     }
// }


//code5:

//ForEach Loop through an Multidimensional array, Multidimensional associative array

$arr=[
    ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33],
    ['firstName'=>"Rabbil","lastName"=>"Hasan","email"=>"info@rabbil.com","age"=>33],
    ['firstName'=>"Hasin","lastName"=>"Hayder","email"=>"info@hasin.com","age"=>33],

];


foreach($arr as $child){
    foreach($child as $key=>$value){
        echo "$key: $value <br/>";
    }
}

?>
<?php
//indexed Arrays
// code1:

// //how to create

// $array1 = array('apple','orange','mango');
// $array2 = ['apple','orange','mango'];

// //Accessing values

// echo $array1[2];
// echo $array2[1];


// // code2:

// //for loop through an indexed array

// $array1 = array('apple','orange','mango');

// for($i=0; $i<count($array1); $i++){
//     echo "$array1[$i] <br/>";
// }

// code3:

//Foreach loop through an indexed Array

$array1 = array('apple','orange','mango','cherry');

foreach($array1 as $item){
    echo "$item <br/>";
}

?>
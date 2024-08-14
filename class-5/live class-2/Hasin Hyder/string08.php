<?php

// //code1:

// $string = "PHP & Framework Course From Ostad";


// $shuffled = str_shuffle($string );

// echo $shuffled;


// //code2:

// $string = "PHP & Framework Course From Ostad";


// $encodeString = base64_encode($string);

// echo $encodeString;


//code2:

$string = "UEhQICYgRnJhbWV3b3JrIENvdXJzZSBGcm9tIE9zdGFk";


$decodeString = base64_decode($string);

echo $decodeString;
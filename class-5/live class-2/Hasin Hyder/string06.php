<?php

// //code1:

// $string = "PHP & Framework Course From Ostad";


// $parts = explode(" ",$string); //delimiter = seperator

// print_r($parts);



// //code2:

// $string = "PHP & Framework Course From Ostad";


// $parts = explode(" ",$string); //delimiter = seperator

// echo count($parts);


// //code3:

// $stringPasts = ["PHP", "&", "Framework", "Course", "From", "Ostad"];


// $newString = implode(" ",$stringPasts); //delimiter = seperator

// echo $newString;


//code3:

$stringPasts = ["PHP", "&", "Framework", "Course", "From", "Ostad"];


$newString = join(" ",$stringPasts); //delimiter = seperator

echo $newString;
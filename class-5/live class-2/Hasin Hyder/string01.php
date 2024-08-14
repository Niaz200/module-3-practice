<?php

// // code1:

// $string = "Hello World";
// $anotherString = 'Hello World';


// $firstName = "John";

// echo "Hello $firstName \n";

// echo "Hello {$firstName}";    //best practice



// // code2:



// $firstName = "John";
// $lastName = "Doe";

// // echo "First Name: $firstName \nLast Name: $lastName \nDesignation: Developer";

// //herodoc

// $longText = <<<ABCD
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;

// echo $longText;



// code3:



// $firstName = "John";
// $lastName = "Doe";

// // echo "First Name: $firstName \nLast Name: $lastName \nDesignation: Developer";

// //herodoc

// // $longText = <<<ABCD
// // First Name: {$firstName}
// // Last Name: {$lastName}
// // Designation: Developer
// // ABCD;

// // echo $longText;


// //nowdoc
// $longText = <<<'ABCD'
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;

// echo $longText;


// // code4:



// $firstName = "John";
// $lastName = "Doe";

// // $fullName = $firstName ." ".$lastName;
// $fullName = "{$firstName} {$lastName}";

// echo $fullName;


// code5:



$firstName = "John";
$lastName = "Doe";

$fullName = $firstName ." ".$lastName;     //concatenation concatenate
// $fullName = "{$firstName} {$lastName}";

echo $fullName;


?>
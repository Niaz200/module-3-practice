<?php

//compact(): Creates an array containing variables and their values.
// code1:

/*

$name = "jhon";
$city = "Dhaka";
$age = 33;

$arr=compact('name','city','age');

print_r($arr);


*/

// extract():Imports variables from an array into the current symbol table (i.e., makes array keys as variable names and array values as variable values).

// code2:

/*

$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

extract($person);

echo $firstName;

*/


//code3:

$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

extract($person);

echo $lastName;

?>
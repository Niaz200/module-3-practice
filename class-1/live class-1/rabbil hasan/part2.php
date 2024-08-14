<?php
//Associative Arrays

// // code1:
// // How to create

// $person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

// //Accessing values

// echo $person['firstName'];

// // code2:
// // How to create

// $person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

// //Accessing values

// print_r($person);


//code3:

//ForEach Loop through an Associative Array

// $person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

// foreach($person as $key=>$value){
//     echo "$key <br/>"; //print only key
// }


// //code4:

// $person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

// foreach($person as $key=>$value){
//     echo "$value <br/>"; //print only value
// }


//code5:

$person = ['firstName'=>"OSTAD","lastName"=>"Limited","email"=>"info@ostad.com","age"=>33];

foreach($person as $key=>$value){
    echo "$key: $value <br/>"; //print key and value
}

?>
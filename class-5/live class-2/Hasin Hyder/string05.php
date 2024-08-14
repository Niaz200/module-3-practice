<?php


// //code1:

// $character = "*";

// //repeat for 10 times

// for($i=0;$i<10;$i++){
//     echo $character;
// }


// //code2:

// $character = "*";

// //repeat for 10 times

// echo str_repeat($character,10);



// code3:

$character = "*";

for($i=10; $i>0;$i--){
    echo str_repeat($character,$i)."\n";
}


<?php


//     //code1:

// $string = "PHP & Framework Course From Ostad";

// $search = "Framework";

// $replace = "Laravel";


// $newString = str_replace($search,$replace,$string);
// echo $newString;



//    //code2:

//    $string2 = "Language & Framework Course From Ostad";

//    $search2 = ["Language","Framework"];
   
//    $replace2 = ["PHP","Laravel"];
   
   
//    $newString2 = str_replace($search2,$replace2,$string2);
//    echo $newString2;


    //  //code3: case insensetive

    //  $string2 = "language & Framework Course From Ostad";

    //  $search2 = ["Language","Framework"];
     
    //  $replace2 = ["PHP","Laravel"];
     
     
    //  $newString2 = str_ireplace($search2,$replace2,$string2);
    //  echo $newString2;



     //code4: 

     $string2 = "Language & Framework Course From Ostad";

 
     
     $newString3 = strtr($string2,[
        "Language" => "PHP",
        "Framework" => "Laravel"
     ]);
     echo $newString3;


?> 
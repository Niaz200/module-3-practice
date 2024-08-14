<?php


// //code1:

// $string = "PHP & Laravel Course From Ostad";

// $needle = "Laravel";

// $position = strpos($string,$needle);

// echo $position;




//code2:

$string = "PHP & Laravel Course From Ostad";

$needle = "Laravel";

$position = strpos($string,$needle);

if($position !== false){
    echo "Found";
}else{
    echo "Not Found";
}

?>
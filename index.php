<?php
$numbers=[];
$number=[];
echo "<pre>";
for ($i=0;$i<90;$i++) {
    array_push($number,$i);
}

$number = array_chunk($number, 10);
foreach($number as $num) {
    $keys = array_rand($num,3);
    $random=[];
    foreach($keys as $key) {
        array_push($random, $num[$key]);
    }
    array_push($numbers, $random);
}

print_r($numbers);


// $b=[];
// $number=[];
// for ($i=1;$i<=10;$i++) {
//    array_push($b,$i);
// }
// $b = array_flip($b);
// array_push($number,array_fill(1,9,$b));

// for ($i = 0; $i<9;$i++) {
//     foreach($b as $key2=>$value2){
        
//         print_r($key2+(10*$i));
//         echo "<br>";

//     }
//     echo "<br>";
// }

// print_r($number[0]);

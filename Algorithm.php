<?php
$arr = array(1,2000,4,5,1077,7,78);
$length = count($arr);
// BUBBLE
// for($i =0 ; $i<$length-1 ; $i++){
//     for($j = $i+1 ; $j < $length ; $j++){
//         if($arr[$i]>$arr[$j]){
//         $tmp = $arr[$j];
//         $arr[$j] = $arr[$i];
//         $arr[$i] = $tmp;
//     }
// }}
// SELECTION

for($i = 0 ; $i <$length-1; $i++){
    $min = $i;
    for($j = $i+1 ; $j < $length ; $j++){
    if($arr[$j] < $arr[$min])
    
        $min = $j;}
    
        // if($min !==$i){
        $t = $arr[$min];
        $arr[$min] = $arr[$i];
        $arr[$i] = $t;
        // }
    

    
    
}
print_r($arr);
?>
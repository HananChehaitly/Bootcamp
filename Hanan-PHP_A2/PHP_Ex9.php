<?php
function remove($arr,$entry){
    $new_arr = [];
    foreach($arr as $elmnt){
        if($elmnt!=$entry){
            $new_arr[]=$elmnt;
        }
    }
    return $new_arr;
}

$arr=[3,2,4,5,2];
$arr = remove($arr,2);
print_r($arr);

<?php
function union($arr1,$arr2){
    $union=$arr1;
    foreach($arr2 as $elmnt){
        if(!in_array($elmnt,$union)){
            $union[]=$elmnt;
        }
    }
    return $union;
}

print_r(union([2,5,'hi',6],['hi',1,5,7,8,6]));

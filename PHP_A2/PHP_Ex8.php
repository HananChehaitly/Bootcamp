<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$arr1 = explode(", ",$list1);
$arr2 = explode(", ",$list2);
$merge=[];
/*I will assume that the input strings always have same size
and that the merged array does not need to be sorted */
$i=0;
foreach($arr1 as $number){
    if($number!=$arr2[$i]){
        if(!in_array($number,$merge)){
        $merge[]=$number;
    }
        if(!in_array($arr2[$i],$merge)){
        $merge[]=$arr2[$i];
        }
    }
    else{
        if(!in_array($number,$merge)){
        $merge[]=$number;
    }
    }
    $i++;
}
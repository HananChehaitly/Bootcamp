<?php
$arr=[3,65,434,32,7,33];
$even = [];
$odd  = [];
foreach($arr as $value){
    if($value%2==0){
        $even[]=$value;
    }
    else{
        $odd[]=$value;
    }
}
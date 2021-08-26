<?php
$arr = ["marc"=>95,"karim"=>96,"jad"=>100];
$index = array_keys($arr)[0]; #could have chosen any key
foreach($arr as $key => $value){
    if ($value > $arr[$index]){
        $index = $key;
    }
}
echo $index;
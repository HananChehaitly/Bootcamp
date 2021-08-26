<?php
$arr = [1,3,6,-2,4]; #Put your array here

$max=$arr[0]; #Could have chosen any element in the array
$min = $arr[0]; #Could have chosen any element in the array
foreach($arr as $number){
        if($number>$max){
            $max = $number;
        }
        elseif ($number < $min) {
            $min = $number;
        }
}
echo "The maximum is ".$max." and the minimum is ".$min;

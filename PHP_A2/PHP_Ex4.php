<?php
$arr = [1,4,5,6,2];
$reverse = [$arr[count($arr)-1]];
for($index=count($arr)-2;$index>=0;$index--){
    $reverse[]=$arr[$index];
}
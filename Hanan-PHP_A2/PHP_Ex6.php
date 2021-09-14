<?php
function convert($b){
    $decimal=0;
    $i=0;
    while($b!=0){
        $decimal = $decimal + (2**$i)*($b%10);
        $i++;
        $b=(int)($b/10);
    }
    return $decimal;
}

echo convert(10010);
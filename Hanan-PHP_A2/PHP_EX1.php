<?php
function factorial($x){
    if ($x==0){
        return 1;
    }
    else{
    $fac=1;
    for($i=1; $i<=$x ; $i++){
      $fac = $fac*$i ;
    }
    return $fac ;
}
}
echo factorial(4);

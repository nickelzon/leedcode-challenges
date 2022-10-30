<?php

function Reverse($str){
    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }
    return $str;
}

$string = "Hello!";

print_r(Reverse($string));
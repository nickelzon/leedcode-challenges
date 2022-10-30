<?php

function romanToInt($a){

    $romans = array(
        "I"=>1,
        "V"=>5,
        "X"=>10,
        "L"=>50,
        "C"=>100,
        "D"=>500,
        "M"=>1000
    );

    $total = array("total"=>0);

    for ($i = 0; $i <= strlen($a); $i++){
        
        if ($romans[$a[$i]] < $romans[$a[$i+1]]){
            $total["total"] = $total["total"] + $romans[$a[$i+1]] - $romans[$a[$i]];
            $i++;
        } else {
            $total["total"] += $romans[$a[$i]];
        }
    }

return $total["total"];
}

var_dump(romanToInt("MCMXCIX"));

?>
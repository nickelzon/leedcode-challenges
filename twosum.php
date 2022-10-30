<?php

function twoSum($nums, $target){


    for ($i = 0; $i < count($nums); $i++){
        

        for ($j = $i + 1; $j < count($nums); $j++){

            if ($nums[$i] + $nums[$j] == $target){
                $indices = array($nums[$i], $nums[$j]);
                break;
            }
        }
    }
return $indices;
}

var_dump(twoSum([2, 4, 11, 3], 6));


?>
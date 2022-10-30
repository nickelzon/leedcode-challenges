<?php

    function search($nums, $target){

        sort($nums);
        $index = -1;

        for ($i = 0; $i < count($nums); $i+=1){
             if ($nums[$i] == $target){
                $index = $i;
                break;
            }
        }
    return $index;
    }
var_dump(search([1], 1));
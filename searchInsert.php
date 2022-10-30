<?php

    function searchInsert($nums, $target){
        
        for ($i = 0; $i <= count($nums); $i+=1){
            if ($nums[$i] == $target){
               $result = $i;
               break;
            } else if ($nums[$i] > $target){
                $result = $i;
                break;
            } else if ($i == count($nums)){
                $result = count($nums);
                break;
            }
        }
    return $result;
    }

var_dump(searchInsert([1], 1));
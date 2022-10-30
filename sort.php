<?php

    function ascend($arr){

        for ($i = 0; $i < count($arr) - 1; $i+=1){

            for ($j = 0; $j < count($arr) - 1 - $i; $j+=1){
                if ($arr[$j] > $arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }

        }
        return $arr;
    }
print_r(ascend([3, 2, 1]));
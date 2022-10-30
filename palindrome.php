<?php

    function palindrome($array){

        $reversed = strrev($array);
        if ($reversed === $array){
            return true;
        } else {
            return false;
        }
    }

var_dump(palindrome("121"));
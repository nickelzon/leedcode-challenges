<?php

    function reverse($str){

        $reversed = "";
        $j = 0;

        for ($i = strlen($str)-1; $i >= 0; $i--){
            $reversed[$j] = $str[$i];
            $j+=1;
        }
    echo "$reversed";
    }

reverse("qwerty123213131");
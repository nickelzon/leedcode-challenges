<?php

    function removeElement($nums, $val){

        $nums = array_diff($nums, [$val]);

        return $nums;
    }

print_r(removeElement([3, 2, 2, 3], 2));

?>
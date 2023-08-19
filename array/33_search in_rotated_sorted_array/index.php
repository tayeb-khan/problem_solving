<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $nums = [4,5,6,7,0,1,2];
        $target = 0;

        $total_numbers = count($nums);

        $median = ceil($total_numbers / 2);

        $left = 0;

        if ($nums[$median] >= $target) {
            $left = $median;
        } else {
            $left = $median + 1;
        }

        dd($nums[$left]);
    }
}
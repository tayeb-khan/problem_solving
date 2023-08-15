<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    function twoSum($nums, $target)
    {
        foreach ($nums as $index => $num){
            $complement = $target - $num;

            if(isset($numToIndex[$complement])){
                return ([$numToIndex[$complement], $index]);
            }

            $numToIndex[$num] = $index;
        }
    }
}